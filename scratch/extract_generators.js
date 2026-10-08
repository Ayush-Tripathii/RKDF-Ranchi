const fs = require('fs');
const readline = require('readline');

async function extractScripts() {
  const fileStream = fs.createReadStream('C:/Users/Admin/.gemini/antigravity-ide/brain/62f8dc77-1a75-4c8f-9b06-71331e2f0f1e/.system_generated/logs/transcript_full.jsonl');
  const rl = readline.createInterface({
    input: fileStream,
    crlfDelay: Infinity
  });

  const stepMap = {};
  let lineIdx = 0;
  for await (const line of rl) {
    if (line.trim()) {
      try {
        const j = JSON.parse(line);
        if (j.tool_calls && j.tool_calls.length > 0) {
          stepMap[lineIdx] = j.tool_calls[0].args;
        }
      } catch (e) {}
    }
    lineIdx++;
  }

  // Extract render_course_template.php (Step 6201)
  if (stepMap[6201]) {
    fs.writeFileSync('scratch/render_course_template.php', stepMap[6201].CodeContent, 'utf8');
    console.log('Extracted scratch/render_course_template.php');
  }

  // Extract clean_course_data.php (Step 6224)
  if (stepMap[6224]) {
    fs.writeFileSync('scratch/clean_course_data.php', stepMap[6224].CodeContent, 'utf8');
    console.log('Extracted scratch/clean_course_data.php');
  }

  // Extract admissions/apply.php (Step 6360)
  const applyStep = Object.values(stepMap).find(a => a.TargetFile && a.TargetFile.includes('admissions/apply.php') || (a.TargetFile && a.TargetFile.includes('admissions\\apply.php')));
  if (applyStep && applyStep.CodeContent) {
    fs.writeFileSync('admissions/apply.php', applyStep.CodeContent, 'utf8');
    console.log('Extracted admissions/apply.php');
  }
}

extractScripts();
