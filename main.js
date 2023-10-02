function updateTime() {
    const now = new Date();
    const gio = now.getHours();
    const phut = now.getMinutes();
    const giay = now.getSeconds();
    m = checkTime(phut);
    s = checkTime(giay);
    document.getElementById('time').innerHTML = gio + '<br>' + 'Giờ' ;
    document.getElementById('phut').innerHTML = phut + '<br>' + 'Phút';
    document.getElementById('giay').innerHTML = giay + '<br>' + 'Giây';
    setTimeout(updateTime, 1000);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  
    return i;
};


// const upnumber = document.querySelectorAll(".increment-button");
// const downnumber = document.querySelectorAll(".decrement-button");
// const valuinput = document.querySelectorAll(".quantity");

// upnumber.forEach((button, index) {
//     button.addEventListener("click",() => {
//         let vale = parseInt(valuinput[index]);
//        if (vale > 1) {
//             vale --;
//             valuinput[index].value = vale;
//        }
//     });
// });

