<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="view/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<h1 class="h1"><span>Dynamic DB</span> Crud Operation</h1>
<body class="main">
    <div class="container">
        <div class="menu">
            <div class="btns">
            <form action="/add" method="POST">
                <button type="submit" class="btn1" >Add DB</button>
            </form>
            <form action="/table" method="POST">
                <button type="submit" class="btn1" >Add Table</button>
            </form>
            <form action="/addrow" method="POST">
                <button type="submit" class="btn1" >Add Row</button>
            </form>
            </div>

        </div>
            <div class="fields">
      
                    <?php if($_SERVER['REQUEST_URI'] == "/add" || $_SERVER['REQUEST_URI'] == "/adds"):?>
                        <h2 class="createdb"> <span>Create</span>Database</h2>
                        <h3 style="color: green; text-align: center;"><?php echo $_SESSION["created"];?></h3>  
                            <?php unset($_SESSION["created"]);?>
                        <form action="/store" method="POST" enctype="multipart/form-data" class="filling">
                            <div class="inp1">
                                <label for="">DB Name</label>
                                <input type="text" placeholder="Db Name" class="inpname" name="DBname" required>
                            </div>
                            <button type="submit" class="dbbtn">Submit</button>
                        </form>
                    <?php endif;?>
                    <?php if($_SERVER['REQUEST_URI'] == "/table" || $_SERVER['REQUEST_URI'] == "/tables"):?>
                        <h3 style="color: green; text-align: center;"><?php echo $_SESSION["created"];?></h3>  
                            <?php unset($_SESSION["created"]);?>
                        <form action="/insertcolumns" method="POST" enctype="multipart/form-data" class="filling">
                            <h2 class="tableHeading"><span>Create</span>Table</h2>
                            <div class="inp1">
                                <label for="">DB Name</label>
                            <select name="db" id="" class="dbselect">
                                <?php foreach($alldbnames as $key=>$names):?>
                                    <option value="<?php echo $names['Database'];?>" name="dbnames"><?php echo $names['Database'];?></option> 
                                <?php endforeach;?>
                                </select>
                                <div class="">
                                    <label for="">Table Name</label>
                                    <input type="text" placeholder="Table Name" class="inpname" name="tablename">
                                </div>
                                <div class="allcolumns">
                                    <div class="list">
                                        <label for="" class="columnnames">column Name</label>
                                        <input type="text" placeholder="column Name" class="colname" name="colname[]">
                                        <select name="type[]" id="" class="type">
                                            <option value="int" name="">int</option> 
                                            <option value="varchar(255)" name="">varchar(255)</option> 
                                            <option value="DateTime" name="">DateTime</option> 
                                            <option value="text" name="">text</option> 
                                        </select>
                                    </div>
                                

                                </div>
                                <button type="submit" class="sumbtn">Submit</button>
                                </div>
                                </form>
                                <button class="addbtn">Add column</button>
                            </div>
                        
                          


                            <?php endif;?>


                            <?php if($_SERVER['REQUEST_URI'] == "/addrow"):?>
                        <form action="/insertRow" method="POST" enctype="multipart/form-data" class="filling">
                            <div class="inp1">
                                <label for="">DB Name</label>
                                <select class="selects" name="databaseName" id="selects" onChange="select()">
                                    <option value="">Select a Database</option>
                                    <?php foreach($alldbnames as $datas):?>
                                    <option value="<?php echo $datas['Database'];?>"><?php echo $datas['Database'];?></option>
                                    <?php endforeach;?>
                                </select>
                                <div class="">
                                    <label for="">Table Name</label>
                                <select class="" name="table" id="tags" onChange="columns()">
                                <option value="">Select a Table</option>
                                </select>
                                <div class="inps">

                                </div>
                                  
                                </div>                          

                                </div>
                                <button type="submit" class="sumbtn">Submit</button>

                                </div>
                            </div>
                            </form>
                          

                            <?php endif;?>
                </div>
    
</body>
</html>

<script>

    function select()
    {
        let selects= document.querySelector("#selects").value;
        let tags= document.querySelector("#tags");

        
        $.ajax({
                    method: 'POST',
                    url: '/show',
                    data: selects,
                    success: function (response) {
                        // console.log(response);
                        let obj = JSON.parse(response);
                        // console.log(obj);
                                let data = ''
                                // console.log(obj);
                            for(let i=0;i<obj.length;i++){

                                data+='<option value='+obj[i]+'>'+obj[i]+'</option>'
                            }
                            tags.innerHTML = data;
                    }
                })
    }



    function columns()
    {
        let inps = document.querySelector(".inps")
        let key;
        let val;
        
        let selects= document.querySelector("#selects").value;
        let tags= document.querySelector("#tags").value;
        
        let datas = {
           "select": selects,
            "tags": tags
        }
        $.ajax({
                    method: 'POST',
                    url: '/column',
                    data: datas,
                    success: function (response) {
                        let obj = JSON.parse(response);
                        let arr = [];
                      arr.push(obj);

                    for (let i = 0; i < arr.length; i++) {
                         val = Object.values(arr[i]);
                         key = Object.keys(arr[i]);
                    
                        
                    }
                   for (let j = 0; j < val.length; j++) {
                    if(key[j] !== "id"){
                        let div = document.createElement("div")
                            div.setAttribute("class","columnnames")
                            inps.append(div)
                                let label = document.createElement("label")
                                label.innerText = key[j];
                                div.append(label)
                                let inp = document.createElement("input")
                                inp.setAttribute("name",key[j])
                                inp.setAttribute("placeholder",val[j])
                                
           
                                if(val[j] == "varchar(255)")
                                {
                                 
                                    inp.setAttribute("type","text")

                                }
                                else 
                                {
                                    inp.setAttribute("type","number")
                                }
                                inp.setAttribute("class","colname")

                                div.append(inp)
                                let button = document.createElement("button")
                                button.innerText = val[j] 
                                div.append(button)
                    }

                   }

                    }
                })
    }
















    
let addingcolumn = document.querySelector(".addbtn");
let allcolumns = document.querySelector(".allcolumns");
addingcolumn.addEventListener("click",()=>{
   let div = document.createElement("div")
   div.setAttribute("class","columnnames")
   allcolumns.append(div)
    let label = document.createElement("label")
    label.innerText = "column Name";
    div.append(label)
    let inp = document.createElement("input")
    inp.setAttribute("name","colname[]")
    inp.setAttribute("type","text")
    inp.required = true;
    inp.setAttribute("class","colname")

    div.append(inp)

    let select = document.createElement("select")
    select.setAttribute("class","type")
    select.setAttribute("name","type[]")
    div.append(select)

    let option1 = document.createElement("option")
    option1.innerText = "int";
     
    option1.setAttribute("value","int")
    select.append(option1)

    let option2 = document.createElement("option")
    option2.innerText = "varchar(255)";
   
    option2.setAttribute("value","varchar")

    select.append(option2)

    let option3 = document.createElement("option")
    option3.innerText = "DateTime";
   
    option3.setAttribute("value","DateTime")

    select.append(option3)

    let option4 = document.createElement("option")
    option4.innerText = "text";
  
    option4.setAttribute("value","text")

    select.append(option4)




})

    </script>