const fs = require('fs');
const readline = require('readline');
const { execSync } = require('child_process');

async function main() {
  const fileStream = fs.createReadStream('C:/Users/Admin/.gemini/antigravity-ide/brain/62f8dc77-1a75-4c8f-9b06-71331e2f0f1e/.system_generated/logs/transcript_full.jsonl');
  const rl = readline.createInterface({
    input: fileStream,
    crlfDelay: Infinity
  });

  const edits = [];
  let lineIdx = 0;
  for await (const line of rl) {
    if (line.trim()) {
      try {
        const j = JSON.parse(line);
        if (j.tool_calls && j.tool_calls.length > 0) {
          const tc = j.tool_calls[0];
          if (tc.name === 'replace_file_content' || tc.name === 'write_to_file') {
            edits.push({
              step: lineIdx,
              name: tc.name,
              args: tc.args
            });
          }
        }
      } catch (e) {}
    }
    lineIdx++;
  }

  console.log(`Loaded ${edits.length} edits from transcript.`);

  // Function to apply edits to a file
  function applyEditsToFile(filePath, stepNumbers) {
    let content = fs.readFileSync(filePath, 'utf8');
    stepNumbers.forEach(s => {
      const edit = edits.find(e => e.step === s);
      if (!edit) {
        console.log(`Step ${s} not found in edits`);
        return;
      }
      if (edit.name === 'replace_file_content') {
        const target = edit.args.TargetContent;
        const repl = edit.args.ReplacementContent;
        if (content.includes(target)) {
          content = content.replace(target, repl);
          console.log(`[SUCCESS] Step ${s} applied to ${filePath} (${edit.args.Description})`);
        } else {
          console.log(`[MISMATCH] Step ${s} target not found in ${filePath} (${edit.args.Description})`);
        }
      }
    });
    fs.writeFileSync(filePath, content, 'utf8');
  }

  // 1. Navbar edits
  const navbarSteps = [5650, 5658, 5664, 5672, 5680, 5688, 5702, 5734, 5785, 5789, 5803, 5807, 5827, 5841, 5853, 5873, 5887, 5891, 5923, 5925];
  console.log('\n--- APPLYING NAVBAR EDITS ---');
  applyEditsToFile('includes/navbar.php', navbarSteps);

  // 2. Courses Index edits
  const coursesIndexSteps = [5955, 5959, 5971, 5975, 6011, 6042];
  console.log('\n--- APPLYING COURSES INDEX EDITS ---');
  applyEditsToFile('courses/index.php', coursesIndexSteps);

  // 3. Courses Under Graduate Programs edits
  const ugSteps = [6046];
  console.log('\n--- APPLYING UG PROGRAMS EDITS ---');
  applyEditsToFile('courses/under-graduate-programs.php', ugSteps);

  // 4. Header edits
  const headerSteps = [5698, 5722, 5781, 5799, 5823, 5837, 5929, 5967, 5993, 5995, 6138, 6199, 6284];
  console.log('\n--- APPLYING HEADER EDITS ---');
  applyEditsToFile('includes/header.php', headerSteps);
}

main().catch(console.error);
