<html>  
    <head>  
        <title>Gestionnaire de PC</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <style type="text/css">
            button:focus {
    outline: 0;
    box-shadow: none!important;
}
            tr:hover{
                background-color: yellow;
            }

            .details td {
                width: 15%;
                height:20px;
                padding: 10px;
            }
            .titl {
                background-color: #7ac2cf;
            }

            .view_btn {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.btn_delete {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.view_btn .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.btn_delete .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.view_btn:hover .tooltiptext {
  visibility: visible;
}

.btn_delete:hover .tooltiptext {
  visibility: visible;
}
        </style>


    </head>  
    <body>  
        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<h3 align="center"> Gestionnaire des PC</h3><br />
                <input type="text" class="form-control search" id="search" placeholder="Checher ici par: Modele, Marque..." name="search" autocomplete="off" required> <br>
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
            <div id="details"></div>
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var first_name = $('#first_name').text();  
        var last_name = $('#last_name').text();  
        if(first_name == '')  
        {  
            alert("Enter First Name");  
            return false;  
        }  
        if(last_name == '')  
        {  
            alert("Enter Last Name");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{first_name:first_name, last_name:last_name},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>Modification effectuée!</div>");
            }  
        });  
    }  
    $(document).on('blur', '.Prenom', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Prenom");  
    });  
        $(document).on('blur', '.Nom', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Nom");  
    }); 
    $(document).on('blur', '.TyprM', function(){  
        var id = $(this).data("id");  
        var last_name = $(this).text();  
        edit_data(id,last_name, "TyprM");  
    }); 

       $(document).on('input', '.search', function(){  
        var id = $(this).value;  
        var last_name = $(this).text();
        $.ajax({  
            url:"select.php?search="+document.getElementById('search').value,  
            method:"POST",
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
        console.log("HELLO");
    }); 
        $(document).on('blur', '.Marque', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Marque");  
    }); 
         $(document).on('blur', '.DL', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Datel");  
  }); 
         $(document).on('blur', '.Modele', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Modele");  
  }); 
         $(document).on('blur', '.NS', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "NS");  
  }); 
         $(document).on('blur', '.IDI', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "IDINV"); 
  }); 
         $(document).on('blur', '.DG', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Datef"); 
  }); 
         $(document).on('blur', '.DA', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Datea");  
  }); 
         $(document).on('blur', '.CPU', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "CPU");  
  }); 
         $(document).on('blur', '.RAM', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "RAM");  
  }); 
         $(document).on('blur', '.THD', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "TypeHHD");  
  }); 
         $(document).on('blur', '.CHD', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Capacite");
  }); 
         $(document).on('blur', '.TLE', function(){  
        var id = $(this).data("id");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "Taille");  
    }); 
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id");  
        if(confirm("Vous êtes sûr au supression?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
    $(document).on('click', '.view_btn', function(){  
        var id=$(this).data("id");  
        if(1)  
        {  
            $.ajax({  
                url:"details.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    $('#details').html(data);  
                }  
            });  
        }  
    }); 
});  
</script>