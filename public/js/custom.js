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