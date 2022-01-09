var ctx = document.getElementById('chart').getContext("2d");

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'BTC',
            data: [29374, 33537, 49631, 59095, 57828, 36684, 33572, 39974, 48847, 48116, 61004, 81235],
            /*backgroundColor: [
                '#0E76E5',
                '#F4ECF7',
                '#7DB2EC',
                '#9FDABC',
                '#FAD0CF',
                '#DEAD8A',
                '#DCDE87',
                '#A3A0A0',
                '#F5CBA7',
                '#566573',
                '#A2D9CE',
                '#FCF3CF'
            ]*/
            backgroundColor: '#ff3c38',
            borderColor: '#ff3c38',
            borderWidth: 2
        },
        {
            label: 'EUR',
            data: [30589, 80546, 14523, 26578, 21546, 55987, 29874, 65412, 63258, 25874, 20874, 14952],
            /*backgroundColor: [
                '#0D6CD1',
                '#E2A6F9',
                '#61A3EC',
                '#71DBA5',
                '#FFAAA8',
                '#DF9B6A',
                '#DEE169',
                '#7B7979',
                '#F5B37A',
                '#495F73',
                '#77DFCB',
                '#FFEC9F'
            ]*/
            backgroundColor: '#0e76e5',
            borderColor: '#0E76E5',
            borderWidth: 2
        }
        ]
    },
    options: {
        responsive: true
    }
});


// change theme color
const themeBtn = document.querySelector(".theme-btn");

themeBtn.addEventListener("click", () => {
    document.body.classList.toggle('dark');
})