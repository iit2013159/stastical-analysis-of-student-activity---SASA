// Morris.js Charts sample data for SB Admin template


       // Area Chart
    var datar = [];    
    for (i = 0; i < ar.length; i++) {
        datar.push({"id":ar[i].building_id, "pop":ar[i].total_population, "reg":ar[i].b_number_of_students});        
    }
    var datah =[];
    for (j = 0; j < ah.length; j++) {
        datah.push({"label":ah[j].name, "value":ah[j].strength});
    }
    var datab = [];
    for (i = 0; i < ab.length; i++) {
        datab.push({"building":ab[i].building_name,"reg":ab[i].b_number_of_students});
    }

    var datati = [];
    for (j = 0; j < ati.length; j++) {
        datati.push({"trans":ati[j].trans,"hour":ati[j].hou});
    }
    var databh = [];
    for (j = 0; j < abh.length; j++) {
        databh.push({"building":abh[j].building_name,"reg":abh[j].b_number_of_students});
    }
    var datat = [];
    

    for (j = 0; j < at.length; j++) {
        datat.push({"hour":at[j].time_slot, "BH1":at[j].a, "BH2":at[j].b, "BH3":at[j].c, 
            "BH4":at[j].d,"BH5":at[j].e,"GH1":at[j].f,"GH2":at[j].g,"GH3":at[j].h,
            "CC1":at[j].i,"CC2":at[j].j,"CC3":at[j].k,"LT":at[j].l,
            "Admin":at[j].m,"Cafeteria":at[j].n,"Library":at[j].o,
            "SAC":at[j].p,"Health Centre":at[j].q,"Swimming pool":at[j].r});
    }
$(function() {


    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: datar,
        xkey: 'id',
        ykeys: ['pop', 'reg'],
        labels: ['capacity', 'population', 'id'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        behaveLikeLine:true,
        parseTime: false,
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: datah,
        resize: true
    });

    
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            d: '2012-10-01',
            logs: 802
        }, {
            d: '2012-10-02',
            logs: 783
        }, {
            d: '2012-10-03',
            logs: 820
        }, {
            d: '2012-10-04',
            logs: 839
        }, {
            d: '2012-10-05',
            logs: 792
        }, {
            d: '2012-10-06',
            logs: 859
        }, {
            d: '2012-10-07',
            logs: 790
        }, {
            d: '2012-10-08',
            logs: 1680
        }, {
            d: '2012-10-09',
            logs: 1592
        }, {
            d: '2012-10-10',
            logs: 1420
        }, {
            d: '2012-10-11',
            logs: 882
        }, {
            d: '2012-10-12',
            logs: 889
        }, {
            d: '2012-10-13',
            logs: 819
        }, {
            d: '2012-10-14',
            logs: 849
        }, {
            d: '2012-10-15',
            logs: 870
        }, {
            d: '2012-10-16',
            logs: 1063
        }, {
            d: '2012-10-17',
            logs: 1192
        }, {
            d: '2012-10-18',
            logs: 1224
        }, {
            d: '2012-10-19',
            logs: 1329
        }, {
            d: '2012-10-20',
            logs: 1329
        }, {
            d: '2012-10-21',
            logs: 1239
        }, {
            d: '2012-10-22',
            logs: 1190
        }, {
            d: '2012-10-23',
            logs: 1312
        }, {
            d: '2012-10-24',
            logs: 1293
        }, {
            d: '2012-10-25',
            logs: 1283
        }, {
            d: '2012-10-26',
            logs: 1248
        }, {
            d: '2012-10-27',
            logs: 1323
        }, {
            d: '2012-10-28',
            logs: 1390
        }, {
            d: '2012-10-29',
            logs: 1420
        }, {
            d: '2012-10-30',
            logs: 1529
        }, {
            d: '2012-10-31',
            logs: 1892
        }],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'd',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['logs'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Logs'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });
    
    //line 2
    //bh bar chart
    
    Morris.Bar({
        element: 'morris-bar-chart2',
        data: databh,
        xkey: 'building',
        ykeys: ['reg'],
        labels: ['reg'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    

    // Bar Chart
    Morris.Bar({
        element: 'morris-bar-chart',
        data: datab,
        xkey: 'building',
        ykeys: ['reg'],
        labels: ['reg'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });
    

    //per hour density
     Morris.Bar({
        element: 'morris-bar-chart3',
        data: datati,
        xkey: 'hour',
        ykeys: ['trans'],
        labels: ['trans'],
        barRatio: 0.4,
        xLabelAngle: 90,
        hideHover: 'auto',
        resize: true
    });


     Morris.Area({
        element: 'morris-area-chart2',
        data: datat,
        xkey: 'hour',
        ykeys: ['BH1','BH2','BH3','BH4','BH5','GH1','GH2','GH3','CC1','CC2','CC3','LT','Admin','Cafeteria','Library','SAC','Health Centre','Swimming pool'],
        labels: ['BH1','BH2','BH3','BH4','BH5','GH1','GH2','GH3','CC1','CC2','CC3','LT','Admin','Cafeteria','Library','SAC','Health Centre','Swimming pool'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        parseTime: false,
        
    });
    
    
    // Line Chart
    Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'comp',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
            building: '1 CC1',
            logst: 802,
            logsl: 902
        }, {
            building: '2 CC2',
            logst: 783,
            logsl: 902
        }, {
            building: '3 CC3',
            logst: 820,
            logsl: 902
        }, {
            building: '4 Library',
            logst: 1680,
            logsl: 902
        }, {
            building: '5 Swiming pool',
            logst: 1592,
            logsl: 902
        }, {
            building: '6 Boys Hostel',
            logst: 1420,
            logsl: 902
        }, {
            building: '7 Girls hostel',
            logst: 882,
            logsl: 902
        }, {
            building: '9 Admin',
            logst: 889,
            logsl: 902
        }, {
            building: '10 Lecture theatre',
            logst: 849,
            logsl: 902
        }],
        // The name of the data record attribute that contains x-visitss.
        xkey: 'building',
        // A list of names of data record attributes that contain y-visitss.
        ykeys: ['logst','logsl'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Logs This week', 'Logs Last week'],
        // Disables line smoothing
        smooth: false,
        resize: true
    });

});
