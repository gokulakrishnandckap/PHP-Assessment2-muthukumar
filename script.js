// let column = 1;
// let type = 1;
// let addingcolumn = document.querySelector(".addbtn");
// let allcolumns = document.querySelector(".allcolumns");
// addingcolumn.addEventListener("click",()=>{
//    let div = document.createElement("div")
//    div.setAttribute("class","columnnames")
//    allcolumns.append(div)
//     let label = document.createElement("label")
//     label.innerText = "column Name";
//     div.append(label)
//     let inp = document.createElement("input")
//     inp.setAttribute("name","colname[]")
//     inp.setAttribute("type","text")
//     inp.setAttribute("class","colname")

//     div.append(inp)

//     let select = document.createElement("select")
//     select.setAttribute("class","type")
//     select.setAttribute("name","type[]")
//     div.append(select)

//     let option1 = document.createElement("option")
//     option1.innerText = "int";
//     // option1.setAttribute("name","")
//     option1.setAttribute("value","int")
//     select.append(option1)

//     let option2 = document.createElement("option")
//     option2.innerText = "varchar(255)";
//     // option2.setAttribute("name","")
//     option2.setAttribute("value","varchar")

//     select.append(option2)

//     let option3 = document.createElement("option")
//     option3.innerText = "DateTime";
//     // option3.setAttribute("name",type++)
//     option3.setAttribute("value","DateTime")

//     select.append(option3)

//     let option4 = document.createElement("option")
//     option4.innerText = "text";
//     // option4.setAttribute("name",type++)
//     option4.setAttribute("value","text")

//     select.append(option4)




// })


// let select= document.querySelector("#selects");
// console.log(select)/;








// $('select').on('change', function() {
//     alert( this.value );
//   });


// $.ajax({
//     method: 'POST',
//     url: '/addrow',
//     data: select,
//     success: function (response) {
//         let obj = JSON.parse(response);
//                 let data = ''
//                 // console.log(obj);
//             // for(let i=0;i<obj.length;i++){
//             //     console.log(obj[i])
//             //     data+='<option value='+obj[i]+'>'+obj[i]+'</option>'
//             // }
//             // tags.innerHTML = data;
//     }
// })




// let column = 1;
// let type = 1;
// let addingcolumn = document.querySelector(".addbtn");
// let allcolumns = document.querySelector(".allcolumns");
// addingcolumn.addEventListener("click",()=>{
//    let div = document.createElement("div")
//    div.setAttribute("class","columnnames")
//    allcolumns.append(div)
//     let label = document.createElement("label")
//     label.innerText = "column Name";
//     div.append(label)
//     let inp = document.createElement("input")
//     inp.setAttribute("name","colname[]")
//     inp.setAttribute("type","text")
//     inp.setAttribute("class","colname")

//     div.append(inp)

//     let select = document.createElement("select")
//     select.setAttribute("class","type")
//     select.setAttribute("name","type[]")
//     div.append(select)

//     let option1 = document.createElement("option")
//     option1.innerText = "int";
//     // option1.setAttribute("name","")
//     option1.setAttribute("value","int")
//     select.append(option1)

//     let option2 = document.createElement("option")
//     option2.innerText = "varchar(255)";
//     // option2.setAttribute("name","")
//     option2.setAttribute("value","varchar")

//     select.append(option2)

//     let option3 = document.createElement("option")
//     option3.innerText = "DateTime";
//     // option3.setAttribute("name",type++)
//     option3.setAttribute("value","DateTime")

//     select.append(option3)

//     let option4 = document.createElement("option")
//     option4.innerText = "text";
//     // option4.setAttribute("name",type++)
//     option4.setAttribute("value","text")

//     select.append(option4)




// })


// // let select= document.querySelector("#selects");
// // console.log(select);








// // $('select').on('change', function() {
// //     alert( this.value );
// //   });


// // $.ajax({
// //     method: 'POST',
// //     url: '/addrow',
// //     data: select,
// //     success: function (response) {
// //         let obj = JSON.parse(response);
// //                 let data = ''
// //                 // console.log(obj);
// //             // for(let i=0;i<obj.length;i++){
// //             //     console.log(obj[i])
// //             //     data+='<option value='+obj[i]+'>'+obj[i]+'</option>'
// //             // }
// //             // tags.innerHTML = data;
// //     }
// // })















//     // <div class="list">
//     //                     <label for="">column Name</label>
//     //                     <ut type="text" placeholder="Table Name" class="inpname" name="tablename" required>
//                         // <select name="type" id="">
//                         //     <option value="int" name="dbnames">int</option> 
//                         //     <option value="varchar(255)" name="dbnames">varchar(255)</option> 
//                         //     <option value="DateTime" name="dbnames">DateTime</option> 
//                         //     <option value="text" name="dbnames">text</option> 
//                         // </select>
//                         // <button class="addbtn">
//                         //     Add column
//                         // </button>
//     //                 </div>


        // $("select").change(function(){
        // alert("The text has been changed.");
        // });
    // function select()
    // {
    //     let selects= document.querySelector("#selects").value;
    //     console.log(selects);
    // }
            // $.ajax({
            //         method: 'POST',
            //         url: '/show',
            //         data: select,
            //         success: function (response) {
            //             let obj = JSON.parse(response);
            //                     let data = ''
            //                     console.log(obj);
            //                 // for(let i=0;i<obj.length;i++){
            //                 //     console.log(obj[i])
            //                 //     data+='<option value='+obj[i]+'>'+obj[i]+'</option>'
            //                 // }
            //                 // tags.innerHTML = data;
            //         }
            //     })
    //     console.log("eer");
    // }
    // $.ajax({
    //     method: 'POST',
    //     url: '/addrow',
    //     data: select,
    //     success: function (response) {
    //         let obj = JSON.parse(response);
    //                 let data = ''
    //                 // console.log(obj);
    //             // for(let i=0;i<obj.length;i++){
    //             //     console.log(obj[i])
    //             //     data+='<option value='+obj[i]+'>'+obj[i]+'</option>'
    //             // }
    //             // tags.innerHTML = data;
    //     }
    // })
//     public function tableListUsingAjax(){

// $tables = array_keys($_REQUEST)[0];
// // var_dump($tables);

//  $this->dbModel->tableList($tables);
// }


// public function tableList($data){

// $result = "SHOW TABLES FROM $data"; 
// $row =  $this->db->prepare($result);
// $row->execute();
// $details = $row->fetchAll();
// $allData = [];
// foreach($details as $detail){
//     $allData[] = $detail['Tablesin'.$data];

// }

// echo  json_encode($allData);

// }




    // </script>
    // <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->






    // <div class="list">
    //                     <label for="">column Name</label>
    //                     <ut type="text" placeholder="Table Name" class="inpname" name="tablename" required>
                        // <select name="type" id="">
                        //     <option value="int" name="dbnames">int</option> 
                        //     <option value="varchar(255)" name="dbnames">varchar(255)</option> 
                        //     <option value="DateTime" name="dbnames">DateTime</option> 
                        //     <option value="text" name="dbnames">text</option> 
                        // </select>
                        // <button class="addbtn">
                        //     Add column
                        // </button>
    //                 </div>