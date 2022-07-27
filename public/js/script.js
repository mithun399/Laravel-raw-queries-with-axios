function button(){
    const name=document.getElementById('mname').value;
    const email=document.getElementById('email').value;
    // alert("name is:"+name+' '+"email is:"+email);

    let url="/insertData"
    let data={name:name,email:email};
    
    axios.post(url,data)
      .then(function (response) {
        alert(response.data);
      })
      .catch(function (error) {
        alert(error);
      });
}

function dell(){

    let myId=document.getElementById('myId').value;
    let url="/deleteData";
    let data={id:myId};
    axios.post(url,data)
    .then(function(response){
        alert(response.data);
    })
    .catch(function(error){
        alert(error);
    });
}

function update(){
    
    let name=document.getElementById('name').value;
    let email=document.getElementById('email').value;
    let myID=document.getElementById('myID').value;
    let url="/updateData";
    let data={name:name,email:email,id:myID};
    axios.post(url,data)
    .then(function(response){
        alert(response.data);
    })
    .catch(function(error){
        alert(error);
    })
}