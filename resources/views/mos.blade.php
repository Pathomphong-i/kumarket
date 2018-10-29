<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/semantic.css" media="screen" title="no title">
        <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
        <title> Mos สามเหลี่ยมอะไร ?</title>

    </head>
    <body>
    <div class="ui segment">
        <div class="ui card container">
            <div class="content">
                <form class="ui form">  
                  <h4 class="ui dividing header">สามเหลี่ยมอะไร ?</h4>
                    <div class="inline field">
                        <label for="side1"> ด้านที่ 1: </label>
                        <input type="text" name="side1" id="side1" min="1" required  maxlength="4">
                    </div>
                    <div class="inline field">
                        <label for="side2"> ด้านที่ 2: </label>
                        <input type="text" name="side2" id="side2" min="1" required  maxlength="4" >
                    </div>       
                    <div class="inline field">
                        <label for="resultText"> ประเภท: </label>
                        <select name="triangle_type" id="triType">
                            <!-- <option value="">ประเภทของสามเหลี่ยม</option> -->
                        </select>
                    </div> 
                    <div class="inline field">
                        <label for="resultText"> ผลลัพธ์: </label>
                        <input id="resultText" type="text" disabled>
                        
                    </div>     
                    <div class="inline field">
                        <input id="submit" type=button value="Submit"/>  
                        <input type="reset" name="reset" value=" Reset "/>
                        <input type='button' onClick="closeWindow()" value='Close'/>
                    </div>
                </form>
            </div>
        </div>
    </div> 

    <script type="text/javascript">
        var tri_name = [
            'สามเหลี่ยมมุมฉาก',
            'สามเหลี่ยมด้านเท่า',
            'สามเหลี่ยมหน้าจั่ว',
            'สามเหลี่ยมด้านไม่เท่า',
        ]
        $.each(tri_name, function(key, value) {   
            $('#triType')
                .append($("<option></option>")
                            .attr("value",key)
                            .text(value)); 
        });
        $('input').keypress(function(event){
            // console.log($(this).val()) ;
            if ($(this).val() == "" ){
                // $(this).val("");
                return event.charCode >= 49 && event.charCode <= 57
            } else {
                return event.charCode >= 48 && event.charCode <= 57
            }
        });
        function closeWindow() 
        { 
            self.opener=this; self.close();  
        }
        function displayResult(result){
            $("#resultText").val(result);
        }
        $('#submit').click(function(){
            var result ="" ;
            var side1 = $('#side1').val() ;
            var side2 = $('#side2').val() ;
            var type = $('#triType').val() ;
            // console.log(type);
            if(type == 0)
            {
                result = rightTriangle(side1,side2)
            }
            else if(type == 1)
            {
                result = equilateralTriangle(side1,side2)
            }
            else if(type ==2)
            {
                result = isoscelesTriangle(side1,side2)
            }
            else if(type ==3)
            {
                result =  scaleneTriangle(side1,side2)
            }
            displayResult(result);    
            
        });
       
    </script>
    <style>
        canvas { 
            width: 200px; 
            height: 200px; 
            border: 1px solid red; 
        }
    </style>     



    </body>
</html>
