// medium Section select
function classlist() {
var mediumlist = document.getElementById('medium').value;

//class
console.log(mediumlist)
if (mediumlist == 'Bangla Medium'||mediumlist == 'English Version'||mediumlist == 'English Medium') {
    var classlist = '<option selected value="all">All</option><option value="Class 1">Class 1</option><option value="Class 2">Class 2</option><option value="Class 3">Class 3</option><option value="Class 4">Class 4</option><option value="Class 5">Class 5</option><option value="Class 6">Class 6</option><option value="Class 7">Class 7</option><option value="Class 8">Class 8</option><option value="Class 9">Class 9</option><option value="Class 10">Class 10</option><option value="HSC-1st YEAR">HSC-1st YEAR</option><option value="HSC-2nd YEAR">HSC-2nd YEAR</option><option value="KG">KG</option><option value="Nursery">Nursery</option><option value="Play">Play</option><option value="SSC">SSC</option>'
}
if (mediumlist == 'Religious Studies') {
    var classlist = '<option selected value="all">All</option><option value="Buddhism Studies">Buddhism Studies</option><option value="Christianity Studies">Christianity Studies</option><option value="Hinduism Studies">Hinduism Studies</option><option value="Islamic studies">Islamic studies</option>'
}
if (mediumlist == 'Admission Test') {
    var classlist = '<option selected value="all">All</option><option value="Cadet  Admission">Cadet  Admission</option><option value="College Admission Test">College Admission Test</option><option value="Engineering University Admission">Engineering University Admission</option><option value="Medical College Admission">Medical College Admission</option><option value="Private University Admission Test">Private University Admission Test</option><option value="Public University Admission Test">Public University Admission Test</option><option value="School Admission Test">School Admission Test</option>'
}
if (mediumlist == 'Professional skill Development') {
    var classlist = '<option selected value="all">All</option><option value="Adobe Illustrator">Adobe Illustrator</option><option value="Adobe Photoshop">Adobe Photoshop</option><option value="Computer Prgramming">Computer Prgramming</option><option value="Digital Marketing">Digital Marketing</option><option value="Fashion Design">Fashion Design</option><option value="Fashion Drawing">Fashion Drawing</option><option value="HandWriting">HandWriting</option><option value="Microsoft Office">Microsoft Office</option><option value="Sewing &amp; Tailoring">Sewing &amp; Tailoring</option><option value="Web Design">Web Design</option><option value="Web Programming">Web Programming</option>'
}
if (mediumlist == 'Arts') {
    var classlist = '<option selected value="all">All</option><option value="Dance">Dance</option><option value="Drawing">Drawing</option><option value="Drawing &amp; Painting">Drawing &amp; Painting</option><option value="Instrumental Music">Instrumental Music</option><option value="Music">Music</option>'
}
if (mediumlist == 'Special Skill Development') {
    var classlist = '<option selected value="all">All</option><option value="Cooking">Cooking</option><option value="Driving">Driving</option><option value="Gym">Gym</option><option value="Karate">Karate</option><option value="Kung Fu">Kung Fu</option><option value="music">music</option><option value="Photography">Photography</option><option value="Yoga">Yoga</option>'
}
if (mediumlist == 'Uni Help') {
    var classlist = '<option selected value="all">All</option><option value="BA-Bangla">BA-Bangla</option><option value="BA-English">BA-English</option><option value="BBA">BBA</option><option value="BBA -IR">BBA -IR</option><option value="BBA- Management">BBA- Management</option><option value="BBA-Accounting">BBA-Accounting</option><option value="BBA-Economics">BBA-Economics</option><option value="BBA-Finance">BBA-Finance</option><option value="BBA-HRM">BBA-HRM</option><option value="BBA-Marketing">BBA-Marketing</option><option value="Bhotany">Bhotany</option><option value="BSC-Architecture">BSC-Architecture</option><option value="BSC-CSE">BSC-CSE</option><option value="BSC-EEE">BSC-EEE</option><option value="BSC-Maths">BSC-Maths</option><option value="BSC-Physics">BSC-Physics</option><option value="BSC-Statistics">BSC-Statistics</option><option value="Civil Enginiring">Civil Enginiring</option><option value="Law">Law</option><option value="MA-BANGLA">MA-BANGLA</option><option value="MA-English">MA-English</option><option value="MBA-Accounting">MBA-Accounting</option><option value="MBA-Economics">MBA-Economics</option><option value="MBA-Finance">MBA-Finance</option><option value="MBA-Marketing">MBA-Marketing</option><option value="MBBS">MBBS</option><option value="MSC-Architecture">MSC-Architecture</option><option value="MSC-CSE">MSC-CSE</option><option value="MSC-EEE">MSC-EEE</option>'
}
if (mediumlist == 'Language Learning') {
    var classlist = '<option selected value="all">All</option><option value="Arabic">Arabic</option><option value="Bangla">Bangla</option><option value="Chinese">Chinese</option><option value="English">English</option><option value="French">French</option><option value="German">German</option><option value="Japanese">Japanese</option><option value="Korean">Korean</option><option value="Russian">Russian</option><option value="Spanish">Spanish</option>'
}
if (mediumlist == 'Test Preparation') {
    var classlist = '<option selected value="all">All</option><option value="Bank Job Preparation">Bank Job Preparation</option><option value="GED">GED</option><option value="GMAT">GMAT</option><option value="GRE">GRE</option><option value="IBA">IBA</option><option value="IELTS">IELTS</option><option value="NTRCA  Job Preparation">NTRCA  Job Preparation</option><option value="Olympiad">Olympiad</option><option value="SAT">SAT</option><option value="TOFEL">TOFEL</option>'
}
if (mediumlist == 'Madrasa Medium') {
    var classlist = '<option selected value="all">All</option><option value="Alim 1st Year">Alim 1st Year</option><option value="Alim 2nd Year">Alim 2nd Year</option><option value="Class 1">Class 1</option><option value="Class 2">Class 2</option><option value="Class 3">Class 3</option><option value="Class 4">Class 4</option><option value="Class 5">Class 5</option><option value="Class 6">Class 6</option><option value="Class 7">Class 7</option><option value="Class 8">Class 8</option><option value="Class 9">Class 9</option><option value="Class- Dakhil">Class- Dakhil</option><option value="Play">Play</option>'
}
if (mediumlist == 'Special Child Education') {
    var classlist = '<option selected value="all">All</option><option value="Arts">Arts</option><option value="Basic Education">Basic Education</option><option value="Religious Studies">Religious Studies</option>'
}
if (mediumlist == 'all') {
    var classlist = '<option selected value="all">All</option>'
}

document.getElementById("class").innerHTML = classlist;
}

function subjectlist(){
    var classlist = document.getElementById('class').value;
    console.log(classlist)
    if (classlist == 'Class 1'||classlist == 'Class 2'||classlist == 'Class 3'||classlist == 'Class 4'||classlist == 'Class 5') {
        var subjectlist = '<option selected value="All Subject">All Subject</option><option value="Bangla">Bangla</option><option value="English">English</option><option value="General Math">General Math</option><option value="General Science">General Science</option><option value="Islamic Studies">Islamic Studies</option><option value="Social Science">Social Science</option>'
    }
    document.getElementsByClassName("subject")[0].innerHTML = subjectlist;
}

