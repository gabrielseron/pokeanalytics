// Get variables from PHP
const pokeHP = document.querySelector('.hp').innerHTML
const pokeAtk = document.querySelector('.attack').innerHTML
const pokeDef = document.querySelector('.defense').innerHTML
const pokeSpAtk = document.querySelector('.special-attack').innerHTML
const pokeSpDef = document.querySelector('.special-defense').innerHTML
const pokeSpeed = document.querySelector('.speed').innerHTML

const pokeMoveName1 = document.querySelector('.move1').innerHTML
const pokeMoveName2 = document.querySelector('.move2').innerHTML
const pokeMoveName3 = document.querySelector('.move3').innerHTML
const pokeMoveName4 = document.querySelector('.move4').innerHTML
const pokeMoveName5 = document.querySelector('.move5').innerHTML
const pokeMoveName6 = document.querySelector('.move6').innerHTML
const pokeMoveName7 = document.querySelector('.move7').innerHTML
const pokeMoveName8 = document.querySelector('.move8').innerHTML
const pokeMoveName9 = document.querySelector('.move9').innerHTML
const pokeMoveName10 = document.querySelector('.move10').innerHTML

const pokeMoveUse1 = document.querySelector('.move1Use').innerHTML
const pokeMoveUse2 = document.querySelector('.move2Use').innerHTML
const pokeMoveUse3 = document.querySelector('.move3Use').innerHTML
const pokeMoveUse4 = document.querySelector('.move4Use').innerHTML
const pokeMoveUse5 = document.querySelector('.move5Use').innerHTML
const pokeMoveUse6 = document.querySelector('.move6Use').innerHTML
const pokeMoveUse7 = document.querySelector('.move7Use').innerHTML
const pokeMoveUse8 = document.querySelector('.move8Use').innerHTML
const pokeMoveUse9 = document.querySelector('.move9Use').innerHTML
const pokeMoveUse10 = document.querySelector('.move10Use').innerHTML

const pokeItemName1 = document.querySelector('.item1Img').innerHTML
const pokeItemName2 = document.querySelector('.item2').innerHTML
const pokeItemName3 = document.querySelector('.item3').innerHTML
const pokeItemName4 = document.querySelector('.item4').innerHTML



const ctxMoves = document.querySelector('.movesChart').getContext('2d');
const movesChart = new Chart(ctxMoves, {
    type: 'horizontalBar',
    data: {
        labels: [pokeMoveName1, pokeMoveName2, pokeMoveName3, pokeMoveName4, pokeMoveName5, pokeMoveName6, pokeMoveName7, pokeMoveName8, pokeMoveName9, pokeMoveName10],
        datasets: [{
            fillState: 'white',
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
                left: 20,
                right: 40,
                top: 80,
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
                left: 20,
                right: 40,
                top: 80,
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
    type: 'polarArea',
    data: {
        labels: [pokeItemName1, pokeItemName2, pokeItemName3, pokeItemName4],
        datasets: [{
            label: '# title',
            data: [],
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
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        legend: {
            display: false,
        }
    }
});