let obj =[];
    function get(formData){
        // data=window.formdata = { data:formdata};
    // localStorage.setItem('data','lakdkl');
    // Get the size of an object
    var myJSON = JSON.stringify(formData);
    var myJSON = JSON.parse(JSON.stringify(myJSON) )
    var myJSON = JSON.parse(myJSON);
    // let mydata= localStorage.getItem('data1');
    // data_extractor();
    // var obj = JSON.parse(mydata);
    console.log(myJSON);

    // obj['obj[0]'].push(formData);
    // alert(obj.obj[0]);
   
    // console.log(size);
    
    
    // localStorage.setItem('data1',myJSON);

    }
    
    

    function parser_(formData){
        // console.log(districts);
        // var myJSON=JSON.stringify(districts);
        let mydata = localStorage.getItem('data1');
        var decode = JSON.parse(mydata);
        obj.push(decode);
        obj.push(districts);
        console.log(obj);
        var size = Object.size(obj);
        console.log(size);
    }
    Object.size = function(obj) {
        var size = 0, key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    }