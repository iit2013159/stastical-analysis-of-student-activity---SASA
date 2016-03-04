// Morris.js Charts 

//Global data to be fed to draw the graph
var datac1 = [];
    for (j = 0; j < ac1.length; j++) {
        datac1.push({"days":ac1[j].day,"name":ac1[j].name});
    }
var datac2 = [];
    for (j = 0; j < ac2.length; j++) {
        datac2.push({"days":ac2[j].day,"name":ac2[j].name});
    }
var datac3 = [];
    for (j = 0; j < ac3.length; j++) {
        datac3.push({"days":ac3[j].day,"name":ac3[j].name});
    }
var datac4 = [];
    for (j = 0; j < ac4.length; j++) {
        datac4.push({"days":ac4[j].day,"name":ac4[j].name});
    }
var datac5 = [];
    for (j = 0; j < ac5.length; j++) {
        datac5.push({"days":ac5[j].day,"name":ac5[j].name});
    }
var datac6 = [];
    for (j = 0; j < ac6.length; j++) {
        datac6.push({"days":ac6[j].day,"name":ac6[j].name});
    }
var datac7 = [];
    for (j = 0; j < ac7.length; j++) {
        datac7.push({"days":ac7[j].day,"name":ac7[j].name});
    }



$(function() {
    Morris.Bar({
        element: 'CC1',
        data: datac1,
        xkey: 'name',
        ykeys: ['days'],
        labels: ['days'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'CC2',
        data: datac2,
        xkey: 'name',
        ykeys: ['days'],
        labels: ['days'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'CC3',
        data:datac3,
        xkey: 'name',
        ykeys: ['days'],
        labels: ['days'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'library',
        data: datac6,
        xkey: 'name',
        ykeys: ['days'],
        labels: ['days'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'admin',
        data: datac5,
        xkey: 'name',
        ykeys: ['days'],
        labels: ['days'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'lt',
        data: datac4,
        xkey: 'name',
        ykeys: ['days'],
        labels: ['days'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'bh',
        data: [{
            Days: 'Monday',
            students: 136
        }, {
            Days: 'Tuesday',
            students: 137
        }, {
            Days: 'Wednesday',
            students: 275
        }, {
            Days: 'Thursday',
            students: 380
        }, {
            Days: 'Friday',
            students: 655
        }, {
            Days: 'Saturday',
            students: 655
        }, {
            Days: 'Sunday',
            students: 655
        }],
        xkey: 'Days',
        ykeys: ['students'],
        labels: ['Students'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'gh',
        data: [{
            Days: 'Monday',
            students: 136
        }, {
            Days: 'Tuesday',
            students: 137
        }, {
            Days: 'Wednesday',
            students: 275
        }, {
            Days: 'Thursday',
            students: 380
        }, {
            Days: 'Friday',
            students: 655
        }, {
            Days: 'Saturday',
            students: 655
        }, {
            Days: 'Sunday',
            students: 655
        }],
        xkey: 'Days',
        ykeys: ['students'],
        labels: ['Students'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    
    Morris.Bar({
        element: 'sp',
        data: datac7,
        xkey: 'name',
        ykeys: ['days'],
        labels: ['days'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });


});
