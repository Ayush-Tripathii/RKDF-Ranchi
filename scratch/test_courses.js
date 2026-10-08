const fs = require('fs');
const content = fs.readFileSync('courses/index.php', 'utf8');
const start = content.indexOf('[');
const end = content.indexOf('JSON;', start);
const jsonStr = content.substring(start, end).trim();
const courses = JSON.parse(jsonStr);
console.log('Total Courses:', courses.length);
const levels = {};
const streams = {};
courses.forEach(c => {
  levels[c.level] = (levels[c.level] || 0) + 1;
  streams[c.stream] = (streams[c.stream] || 0) + 1;
});
console.log('Levels:', levels);
console.log('Streams:', streams);
