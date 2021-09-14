var alertDiv = document.getElementById('alert');

function sendData() {
    var myname = document.getElementById('myName').value;
    var myclass = document.getElementById('myClass').value;
    var myroll = document.getElementById('myRoll').value;

    // alert(myname+' : '+myclass+' : '+myroll);

    var url = "/insertData";
    var data = {
        name: myname,
        class: myclass,
        roll: myroll
    };

    axios.post(url, data)
        .then(function (response) {
            alert(response.data);
        })
        .catch(function (error) {
            alert('Error');
        });

}



function updateData() {
    var myId = document.getElementById('myId').value;
    var myname = document.getElementById('myName').value;
    var myclass = document.getElementById('myClass').value;
    var myroll = document.getElementById('myRoll').value;

    // alert(myname+' : '+myclass+' : '+myroll);

    var url = "/updateData";
    var data = {
        id: myId,
        name: myname,
        class: myclass,
        roll: myroll 
    };

    axios.post(url, data)
        .then(function (response) {
            alert(response.data);
        })
        .catch(function (error) {
            alert('Error');
        });

}


function deleteData() {
    var myId = document.getElementById('myId').value;

    var url = "/deleteData";
    var data = {
        id: myId
    };

    axios.post(url, data)
        .then(function (response) {
            alertDiv.innerHTML = response.data;
        })
        .catch(function (response) {
            alertDiv.innerHTML = response.data;
        })

}
