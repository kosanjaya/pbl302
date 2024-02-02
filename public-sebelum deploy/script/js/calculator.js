const dropdownButtons = document.querySelectorAll('.dropdown-button');
const dropdownContents = document.querySelectorAll('.dropdown-content');
const iconImages = document.querySelectorAll('.rotate-icon');
const resultRisk = document.getElementById('result');
const scoreRisk = document.getElementById('score');

var apiEndPoint = 'http://localhost:3000/public/addFinding.html';

dropdownButtons.forEach((button, index) => {
  button.addEventListener('click', function() {
    toggleDropdown(index);
  });
});

document.addEventListener('click', function(event) {
  dropdownButtons.forEach((button, index) => {
    if (!button.contains(event.target) && !dropdownContents[index].contains(event.target)) {
      hideDropdown(index);
    }
  });
});

function toggleDropdown(index) {
  dropdownContents[index].classList.toggle('hidden');
  iconImages[index].classList.toggle('rotate-180');
}

function hideDropdown(index) {
  dropdownContents[index].classList.add('hidden');
  iconImages[index].classList.remove('rotate-180');
}

function selectOption(index, value,option) {
  const button = dropdownButtons[index];
  button.innerText = option;
  selectedValues[index] = value;
  hideDropdown(index);
}

function reloadPage(){
    location.reload();
}


var selectedValues = [];

function calculateCVSS(){
    var AV = CVSS31.Weight.AV[selectedValues[0]];
    var AC = CVSS31.Weight.AC[selectedValues[1]];
    let PR = '';
    var UI = CVSS31.Weight.UI[selectedValues[3]];
    var S = CVSS31.Weight.S[selectedValues[4]];
    var C = CVSS31.Weight.CIA[selectedValues[5]];
    var I = CVSS31.Weight.CIA[selectedValues[6]];
    var A = CVSS31.Weight.CIA[selectedValues[7]];

    if(S === 6.42){ //uncahange
        PR = CVSS31.Weight.PR.U[selectedValues[2]];
    }else{
        PR = CVSS31.Weight.PR.C[selectedValues[2]];
    }

    var ISS = (1-((1-C) * (1-I) * (1-A)));

    let impact = '';

    if(S === 6.42){ //unchange
        impact = S * ISS;
        console.log('ini hasil impact unchanged:',impact);
    }else{
        impact = S * (ISS - 0.029) - 3.25 * Math.pow(ISS - 0.02 , 15);
        console.log('ini hasil impact changed:', impact);
    }
  
    var exploitability = CVSS31.exploitabilityCoefficient * AV * AC * PR * UI;
 
    let baseScore = '';

    if (impact <= 0){
        baseScore = 0;
    }else{
        if(S === 6.42){ //unchange
            baseScore = CVSS31.roundUp(Math.min((impact + exploitability), 10));
        }else{ //Chnage
            baseScore = CVSS31.roundUp(Math.min(CVSS31.scopeCoefficient * (impact + exploitability), 10));
        }
    }

    scoreRisk.innerText = baseScore;
    resultRisk.innerText = CVSS31.severity(baseScore);
    console.log(baseScore);
    
}

// function calculate(){
//     var xml = new XMLHttpRequest();
//     const cvssParameter = `CVSS:31/AV:${selectedValues[0]}/AC:${selectedValues[3]}`;
//     console.log(selectedValues);
//     xml.open('GET',apiEndPoint+'?result='+cvssParameter, true);
//     xml.onreadystatechange = function (){
//         if(xml.readyState == 4 && xml.status == 200){
//             resultRisk.innerText = selectedValues[0];
//             console.log(xml.responseText);
//         }
//     };

//     xml.send();
// }


// Calculator
var CVSS31 = {};
CVSS31.exploitabilityCoefficient = 8.22;
CVSS31.scopeCoefficient = 1.08;
CVSS31.Weight = {
    AV : {
        N : 0.85,
        A : 0.62,
        L : 0.55,
        P : 0.2
    },
    AC : {
        H : 0.44,
        L : 0.77
    },
    PR : {
        U: {
            N : 0.85,
            L : 0.62,
            H : 0.27
        },
        C: {
            N : 0.85,
            L : 0.68,
            H : 0.5
        }
    },
    UI : {
        N : 0.85,
        R : 0.62
    },
    S : {
        U : 6.42,
        C : 7.52
    },
    CIA : {
        N : 0, 
        L : 0.22,
        H : 0.56
    }
};

CVSS31.severityRatings = [{
    name: "None",
    bottom: 0.0,
    top: 0.0
}, {
    name: "Low",
    bottom: 0.1,
    top: 3.9
}, {
    name: "Medium",
    bottom: 4.0,
    top: 6.9
}, {
    name: "High",
    bottom: 7.0,
    top: 8.9
}, {
    name: "Critical",
    bottom: 9.0,
    top: 10.0
}];


CVSS31.roundUp = function Roundup(input){
    var int_input = Math.round(input * 100000);
    if(int_input % 10000 === 0){
        return int_input / 100000;
    }else{
        return (Math.floor(int_input / 10000) + 1) /10;
    }
};

CVSS31.severity = function calcSeverity(score){
    for (let i = 0; i < CVSS31.severityRatings.length; i++){
        const rating = CVSS31.severityRatings[i];
        if(score >= rating.bottom && score <= rating.top){
            return rating.name;
        }
    }
    return "Invalid Score";
};