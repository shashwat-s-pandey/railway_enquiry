$(document).ready(function(){
    
    $('#search_trains').click(function(){
        let boarding_station = $('#boarding_station').val( );
        let destination_station = $('#destination_station').val();

        $.ajax({
            // url: "http://indianrailapi.com/api/v2/TrainBetweenStation/apikey/<apikey>/From/" + boarding_station + "/To/" + destination_station, 
            url: 'https://irctc1.p.rapidapi.com/api/v2/trainBetweenStations?fromStationCode=' + boarding_station + '&toStationCode=' + destination_station,
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': '4207d9fbf7msh14c65ecfc9fd0fcp11abbcjsn259ed8b1395c',
                'X-RapidAPI-Host': 'irctc1.p.rapidapi.com'
            },
            success: function (data) {
                //console.log(data); 
                console.log(data.data);

                let blob;
                for (let i=0; i<data.data.length; i++){
                    // console.log(data.Trains[i].TrainName);
                    blob = blob + `<tr><td>${data.data[i].train_number}</td><td>${data.data[i].train_name}</td><td>${data.data[i].distance}</td><td>${data.data[i].train_type}</td></tr>`
                }

                $('#display_trains').html(`
                <table class="table">
                    <tr>
                        <th>Train Number</th>
                        <th>Train Name</th>
                        <th>Distance(km)</th>
                        <th>Train Type</th>
                    </tr>
                    ${blob}
                </table>
                `);
            },
            error: function(error) {
                alert("Some error");
                console.log(error);
            }
        })
    });

    $('#fetch_stations').click(function () {
        let trainNo=$('#train_no').val();
        
        $.ajax({
            url: 'https://irctc1.p.rapidapi.com/api/v1/getTrainSchedule?trainNo=' + trainNo,
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': '4207d9fbf7msh14c65ecfc9fd0fcp11abbcjsn259ed8b1395c',
                'X-RapidAPI-Host': 'irctc1.p.rapidapi.com'
            }, 
            success: function (data) {
                console.log(data);

                let textBlob;
                for(let i=0; i<data.data.route.length; i++){
                    textBlob = textBlob + `<tr><td>${data.data.route[i].station_code}</td><td>${data.data.route[i].station_name}</td><td>${data.data.route[i].sta_min}</td><td>${data.data.route[i].std_min}</td><td>${data.data.route[i].distance_from_source}</td></tr>`
                }

                $('#display_stations').html(`
                <table class="table">
                    <tr>
                        <th>Station Code</th>
                        <th>Station Name</th>
                        <th>Arrival Time</th>
                        <th>Departure Time</th>
                        <th>Distance Travelled(km)</th>
                    </tr>
                    ${textBlob}
                </table>
                `);
            },
            error: function (error) {
                console.log(error);
                alert("Error occurred");
            }
        })
    })

    $('#check_pnr_status').click(function () {
        let pnrNo = $('#pnr_no').val();

        $.ajax({
            url: 'https://irctc1.p.rapidapi.com/api/v3/getPNRStatus?pnrNumber=8306858099',
            method: 'GET',
            headers: {
                'X-RapidAPI-Key': '4207d9fbf7msh14c65ecfc9fd0fcp11abbcjsn259ed8b1395c',
                'X-RapidAPI-Host': 'irctc1.p.rapidapi.com'
            },
            success: function (data) {
                console.log(data);

                let blobnew;
                for(let i=0; i<data.data.length; i++){
                    blobnew = blobnew + `<tr><td>${data.data[i].Pnr}</td><td>${data.data[i].TrainNo}</td><td>${data.data[i].TrainName}</td><td>${data.data[i].doj}</td><td>${data.data[i].distance_from_source}</td></tr>`
                }

                $('#display_pnr_status').html(`
                <table class="table">
                    <tr>
                        <th>PNR</th>
                        <th>Train Number</th>
                        <th>Train Name</th>
                        <th>Date of Journey</th>
                        <th>Ticket Status</th>
                    </tr>
                    ${textBlob}
                </table>
                `)
            },
            error: function(error){
                console.log(error);
                alert("There is some error");
            }
        })
    })

});