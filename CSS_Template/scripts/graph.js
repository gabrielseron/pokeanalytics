// Get variables from PHP
const pokeHP = document.querySelector('.hp').innerHTML
const pokeAtk = document.querySelector('.attack').innerHTML
const pokeDef = document.querySelector('.defense').innerHTML
const pokeSpAtk = document.querySelector('.special-attack').innerHTML
const pokeSpDef = document.querySelector('.special-defense').innerHTML
const pokeSpeed = document.querySelector('.speed').innerHTML

if (document.querySelector('.move1')) {
    var pokeMoveName1 = document.querySelector('.move1').innerHTML
var pokeMoveUse1 = document.querySelector('.move1Use').innerHTML
} else {
    var pokeMoveName1 = "null"
    var pokeMoveUse1 = "null"
}

if (document.querySelector('.move2')) {
    var pokeMoveName2 = document.querySelector('.move2').innerHTML
var pokeMoveUse2 = document.querySelector('.move2Use').innerHTML
} else {
    var pokeMoveName2 = "null"
    var pokeMoveUse2 = "null"
}

if (document.querySelector('.move3')) {
    var pokeMoveName3 = document.querySelector('.move3').innerHTML
var pokeMoveUse3 = document.querySelector('.move3Use').innerHTML
} else {
    var pokeMoveName3 = "null"
    var pokeMoveUse3 = "null"
}

if (document.querySelector('.move4')) {
    var pokeMoveName4 = document.querySelector('.move4').innerHTML
var pokeMoveUse4 = document.querySelector('.move4Use').innerHTML
} else {
    var pokeMoveName4 = "null"
    var pokeMoveUse4 = "null"
}

if (document.querySelector('.move5')) {
    var pokeMoveName5 = document.querySelector('.move5').innerHTML
var pokeMoveUse5 = document.querySelector('.move5Use').innerHTML
} else {
    var pokeMoveName5 = "null"
    var pokeMoveUse5 = "null"
}

if (document.querySelector('.move6')) {
    var pokeMoveName6 = document.querySelector('.move6').innerHTML
var pokeMoveUse6 = document.querySelector('.move6Use').innerHTML
} else {
    var pokeMoveName6 = "null"
    var pokeMoveUse6 = "null"
}

if (document.querySelector('.move7')) {
    var pokeMoveName7 = document.querySelector('.move7').innerHTML
var pokeMoveUse7 = document.querySelector('.move7Use').innerHTML
} else {
    var pokeMoveName7 = "null"
    var pokeMoveUse7 = "null"
}

if (document.querySelector('.move8')) {
    var pokeMoveName8 = document.querySelector('.move8').innerHTML
var pokeMoveUse8 = document.querySelector('.move8Use').innerHTML
} else {
    var pokeMoveName8 = "null"
    var pokeMoveUse8 = "null"
}

if (document.querySelector('.move9')) {
    var pokeMoveName9 = document.querySelector('.move9').innerHTML
var pokeMoveUse9 = document.querySelector('.move9Use').innerHTML
} else {
    var pokeMoveName9 = "null"
    var pokeMoveUse9 = "null"
}

if (document.querySelector('.move10')) {
    var pokeMoveName10 = document.querySelector('.move10').innerHTML
var pokeMoveUse10 = document.querySelector('.move10Use').innerHTML
} else {
    var pokeMoveName10 = "null"
    var pokeMoveUse10 = "null"
}


if (document.querySelector('.item1')) {
    var pokeItemName1 = document.querySelector('.item1').innerHTML
    var pokeItemUse1 = document.querySelector('.item1Use').innerHTML
    
}else{
    var pokeItemName1 = "None"
    var pokeItemUse1 = "None"
}

if (document.querySelector('.item2')) {
    var pokeItemName2 = document.querySelector('.item2').innerHTML
    var pokeItemUse2 = document.querySelector('.item2Use').innerHTML
    
}else{
    var pokeItemName2 = "None"
    var pokeItemUse2 = "None"
}

if (document.querySelector('.item3')) {
    var pokeItemName3 = document.querySelector('.item3').innerHTML
    var pokeItemUse3 = document.querySelector('.item3Use').innerHTML
}else{
    var pokeItemName3 = "None"
    var pokeItemUse3 = "None"
}

if (document.querySelector('.item4')) {
    var pokeItemName4 = document.querySelector('.item4').innerHTML
    var pokeItemUse4 = document.querySelector('.item4Use').innerHTML
    
}else{
    var pokeItemName4 = "None"
    var pokeItemUse4 = "None"
}




const pokeAbility1 = document.querySelector('.ability1').innerHTML
const pokeab1 = document.querySelector('.abone')
pokeab1.innerHTML = pokeAbility1

if (document.querySelector('.ability2')) {
    const pokeAbility2 = document.querySelector('.ability2').innerHTML
    const pokeab2 = document.querySelector('.abtwo')
    pokeab2.innerHTML = pokeAbility2
}

if (document.querySelector('.ability3')) {
    const pokeAbility3 = document.querySelector('.ability3').innerHTML
    const pokeab3 = document.querySelector('.abthree')
    pokeab3.innerHTML = pokeAbility3
}

const pokeEvName1 = document.querySelector('.spread1Name').innerHTML
const pokeEvName2 = document.querySelector('.spread2Name').innerHTML
const pokeEvName3 = document.querySelector('.spread3Name').innerHTML
const pokeEvName4 = document.querySelector('.spread4Name').innerHTML
const pokeEvName5 = document.querySelector('.spread5Name').innerHTML
const pokeEvName6 = document.querySelector('.spread6Name').innerHTML

const pokeEvUse1 = document.querySelector('.spread1Percent').innerHTML
const pokeEvUse2 = document.querySelector('.spread2Percent').innerHTML
const pokeEvUse3 = document.querySelector('.spread3Percent').innerHTML
const pokeEvUse4 = document.querySelector('.spread4Percent').innerHTML
const pokeEvUse5 = document.querySelector('.spread5Percent').innerHTML
const pokeEvUse6 = document.querySelector('.spread6Percent').innerHTML


const ctxMoves = document.querySelector('.movesChart').getContext('2d');
const movesChart = new Chart(ctxMoves, {
    type: 'horizontalBar',
    data: {
        labels: [pokeMoveName1, pokeMoveName2, pokeMoveName3, pokeMoveName4, pokeMoveName5, pokeMoveName6, pokeMoveName7, pokeMoveName8, pokeMoveName9, pokeMoveName10],
        datasets: [{
            // barPercentage: 0.5,
            // categoryPercentage: 1.0,
            // barThickness: 6,
            // maxBarThickness: 8,
            // minBarLength: 2,
            label: '# title',
            data: [pokeMoveUse1.substring(0, pokeMoveUse1.length -1), pokeMoveUse2.substring(0, pokeMoveUse2.length -1), pokeMoveUse3.substring(0, pokeMoveUse3.length -1), pokeMoveUse4.substring(0, pokeMoveUse4.length -1), pokeMoveUse5.substring(0, pokeMoveUse5.length -1), pokeMoveUse6.substring(0, pokeMoveUse6.length -1), pokeMoveUse7.substring(0, pokeMoveUse7.length -1), pokeMoveUse8.substring(0, pokeMoveUse8.length -1), pokeMoveUse9.substring(0, pokeMoveUse9.length -1), pokeMoveUse10.substring(0, pokeMoveUse10.length -1)],
            backgroundColor: 'rgba(148, 239, 24, 0.3)',
            borderColor: 'rgba(148, 239, 24, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 10,
                right: 20,
                top: 100,
                bottom: 0
            }
        },
        legend: {
            display: false,
        }
    }
});

const ctxStats = document.querySelector('.statsChart').getContext('2d');
const statsChart = new Chart(ctxStats, {
    type: 'radar',
    data: {
        labels: ['HP', 'Attack', 'Defense', 'Spe. Attack', 'Spe. Defense', 'Speed'],
        datasets: [{
            label: '# title',
            data: [pokeHP, pokeAtk, pokeDef, pokeSpAtk, pokeSpDef, pokeSpeed],
            backgroundColor: 'rgba(148, 239, 24, 0.3)',
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 10,
                right: 20,
                top: 100,
                bottom: 0
            }
        },
        legend: {
            display: false
        },
        scale: {
            angleLines: {
                display: false
            },
            ticks: {
                suggestedMin: 5
            }
        }
    }
});

const ctxItems = document.querySelector('.itemsChart').getContext('2d');
const itemsChart = new Chart(ctxItems, {
    type: 'doughnut',
    data: {
        labels: [pokeItemName1, pokeItemName2, pokeItemName3, pokeItemName4],
        datasets: [{
            label: '# title',
            data: [pokeItemUse1.substring(0, pokeItemUse1.length -1), pokeItemUse2.substring(0, pokeItemUse2.length -1), pokeItemUse3.substring(0, pokeItemUse3.length -1), pokeItemUse4.substring(0, pokeItemUse4.length -1)],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            color: 'rgba(255, 255, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 10,
                right: 20,
                top: 100,
                bottom: 0
            }
        },
        legend: {
            display: true,
        }
    }
});

const ctxEv = document.querySelector('.evChart').getContext('2d');
const evChart = new Chart(ctxEv, {
    // The type of chart we want to create
    type: 'bar',
    // The data for our dataset
    data: {
        labels: [pokeEvName1, pokeEvName2, pokeEvName3, pokeEvName4, pokeEvName5, pokeEvName6],
        datasets: [{
            label: '# title',
            data: [pokeEvUse1.substring(0, pokeEvUse1.length -1), pokeEvUse2.substring(0, pokeEvUse2.length -1), pokeEvUse3.substring(0, pokeEvUse3.length -1), pokeEvUse4.substring(0, pokeEvUse4.length -1), pokeEvUse5.substring(0, pokeEvUse5.length -1), pokeEvUse6.substring(0, pokeEvUse6.length -1)],
            backgroundColor: 'rgba(148, 239, 24, 0.3)',
            borderColor: 'rgba(148, 239, 24, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 10,
                right: 20,
                top: 100,
                bottom: 0
            }
        },
        legend: {
            display: false,
        }
    }
});