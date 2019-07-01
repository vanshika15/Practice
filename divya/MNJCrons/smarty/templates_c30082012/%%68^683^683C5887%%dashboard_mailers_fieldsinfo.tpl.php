<?php /* Smarty version 2.6.19, created on 2012-08-13 14:37:36
         compiled from ni/nidashboard/clientmailers/dashboard_mailers_fieldsinfo.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Client Mailers</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />
    <script type="text/javascript">

        function makeData(type,row){
            if (type=='field'|| type =="Field"){
                var fields = new Array("Name","Email","Mobile","Country","Courses","Experience","Qualification");
                return fields;
            }else if (type=='type'|| type=='Type'){
                field=document.getElementById('field'+row).value;
                if (field=="name"||field=="email"||field=="mobile"){
                    var types= new Array("Text");
                    return types;
                }else{
                    var types= new Array("Dropdown","Text");
                    return types;
                }
            }else if(type=='validations'|| type=='Validations'){
                field=document.getElementById('field'+row).value;
                fieldType=document.getElementById('type'+row).value;
                if(fieldType=="dropdown"){
                    var validations= new Array("IsBlank");
                    return validations;
                }
                if(field=="name"||field=="courses"||field=="country"||field=="qualification"){
                    var validations= new Array("IsBlank","IsText");
                    return validations;
                }else if (field=="email"){
                    var validations= new Array("IsBlank","IsEmail");
                    return validations;
                }else if (field=="mobile"){
                    var validations= new Array("IsBlank","IsNumeric","IsMobile");
                    return validations;
                }else if (field=="experience"){
                    var validations= new Array("IsBlank","IsDecimal");
                    return validations;
                }
            }

        }

        function createOption(value,text){
            var option = new Option();
            option.text = text;
            option.value = value;
            return option;
        }

        function createOption1(value,text){
          var option = document.createElement('option');//new Option();
          option.innerHTML = text;
          option.value = value;
          return option;
        }


        function fillOptions(element,arrData){
            for (var i=1;i<=arrData.length;i++){
                element.options[i]=createOption(arrData[i-1].toLowerCase(),arrData[i-1]);
            }               
         }

        function populateSelect(element,type,row){
            var arrData= makeData(type,row);
            fillOptions(element,arrData);
        }   
        
        function selectValidation(row){
            document.getElementById("validations"+row).disabled=false;
            element =document.getElementById("validations"+row);           
            optGroup = document.createElement('optgroup');
            optGroup.label = "Select Validations";
            optGroup.id="optgroup"+row;
            preOptGroup=document.getElementById("optgroup"+row);
            if(preOptGroup!=null){
               preOptGroup.parentNode.removeChild(preOptGroup);
            }
            type="validations";
            fillValidation(optGroup,type,row);
            element.appendChild(optGroup);
           
        }
        
        function fillValidation(optGroupElement,type,row){
            var arrData= makeData(type,row);      
            for (var i=1;i<=arrData.length;i++){
                optGroupElement.appendChild(createOption1(arrData[i-1].toLowerCase(),arrData[i-1]));
            }  
        }

     /*   function arrayDiff(arrData1,arrData2,count){
            for (var i=0; i<arrData1.length; i++){
                if (count==1){
                   if (arrData1[i].toLowerCase()==arrData2){
                       arrData1.splice(i,1);
                    }
                }else{
                    for (var j=0; j<arrData2.length;j++){
                            if (arrData1[i].toLowerCase()==arrData2[j].toLowerCase()){
                                arrData1.splice(i,1);
                                break;
                            }   
                    }
                }
            }
            return arrData1;
        }*/     

        function removeField(){

            try {
                var table = document.getElementById("fields");
                var rowCount = table.rows.length;
                var totalRows=rowCount;
             
                for(var i=0; i<rowCount; i++) {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if(null != chkbox && true == chkbox.checked) {
                        table.deleteRow(i);
                        rowCount--;
                        i--;
                    }
 
 
            }

            if (i==totalRows){
                alert("No row selected to delete.Please select the checkBox first");
            }       
            }catch(e) {
                alert(e);
            }            



        }

        function formValidation(){
            var table = document.getElementById("fields");
            var rowCount = table.rows.length;
            if (document.getElementById('companyname').value==''){
                alert("Enter the company name");
                return false;
            }else{
                var regEx=new RegExp(/^[a-zA-Z\s]{1,}$/i);
                sText=document.getElementById('companyname').value;
            if(!regEx.test(sText)){
                alert("Enter only text.No special or numeric character is allowed in a company name");
                return false;
            }

            }
          
            for (var i=1 ; i<=rowCount-1; i++){
                if (document.getElementById("field"+i).value=="-1"){
                    alert("Select one value for field no. "+i);
                    return false;
                }
                 if (document.getElementById("type"+i).value=="-1"){
                    alert("Select one value for field type for  field no. "+i);
                    return false;
                }
                if (document.getElementById("validations"+i).selectedIndex=="-1"){
                    alert("please select valid validations for field no. "+i);
                    return false; 
                }
            }
            if(document.getElementById('htmlthanklink').value==''){
                alert("Enter the HTML link for the success page ");
                return false;
            }else if (!validateEmailPart()){
                return false;

            }
            
            return true;
        }

        function validateEmailPart(){
            var email=document.getElementById('htmlthanklink').value;
            email= email.toLowerCase();
            var pos;
            pos =email.indexOf("http");
            if(pos==-1){
                alert("Prefix http:// before HTML link");
                return false;
            }
            pos1=email.indexOf("http",pos+1);
            if (pos1!=-1){
                alert("Multiple occurence of http: detected in the HTML link");
                return false;
            }else{
                return true;
            }
        }
        
        function addField()
        {    
            var table = document.getElementById("fields");
            var fields=  makeData('field','-1');
            
            var rowCount = table.rows.length;
            var preRow=rowCount-1;
            var preField=document.getElementById("field"+preRow).value;
            var preFieldType=document.getElementById("type"+preRow).value
            var preValidation=document.getElementById("validations"+preRow).value
            if(preField=="-1"||preFieldType=="-1"||preValidation=="" ){
                alert("fill up the details for the previous field before adding a new field");
                return false;
            }

            if (rowCount==fields.length+1){
                alert("No fields left to enter");
                return;
            }


            var row = table.insertRow(rowCount);


            var  cell= row.insertCell(0);
            var element = document.createElement("input");
            element.type="checkbox";
            element.setAttribute("name","check"+rowCount);
            element.setAttribute("id","check"+rowCount);
            cell.appendChild(element);            


            var cell1 = row.insertCell(1);
            var element1 = document.createElement("select");
            element1.setAttribute('id','field'+rowCount);
            element1.setAttribute('name','field'+rowCount);

            
            element1.options[0]=createOption("-1","--Select--");
            
 
            for (var j=0,k=1; j<fields.length; j++){
                for (var i=1; i<rowCount; i++){
                    if (document.getElementById("field"+i).value==fields[j].toLowerCase()){
                        break;
                    }
                    
                }

                if (i==rowCount){
                        var option = new Option();
                        option.text=fields[j];
                        option.value=fields[j].toLowerCase(); 
                        element1.options[k]=option;
                        k++;            
                 }
                
            }            
            element1.onchange=function(){enableSelect(rowCount);};

            cell1.appendChild(element1);
 
            var cell2 = row.insertCell(2);
            var element2=document.createElement("select");
            element2.setAttribute('id','type'+rowCount);
            element2.setAttribute('name','type'+rowCount);
            element2.setAttribute('disabled',true);
            element2.options[0]=createOption("-1","--Select--");
            element2.onchange =function(){selectValidation(rowCount); };
            cell2.appendChild(element2);



            var cell3 = row.insertCell(3);
            var element3 = document.createElement("select");
            element3.setAttribute('id','validations'+rowCount);
            element3.setAttribute('name','validations'+rowCount+'[]');
            element3.setAttribute('disabled',true);
            element3.setAttribute('multiple',true);

            cell3.appendChild(element3);           
            return true;
        }  

function removeAllOptions(element)
{
  var i;
  if(element.length>1){
    for (i = element.length - 1; i>=1; i--) {
      element.remove(i);
    }
  }
}

        function enableSelect(row){ 
            if(document.getElementById("field"+row).value != "-1"){
                document.getElementById("type"+row).disabled=false;
          //      document.getElementById("validations"+row).disabled=false;
                removeAllOptions(document.getElementById("type"+row));
                populateSelect(document.getElementById("type"+row),'type',row);
          //      populateSelect(document.getElementById("validations"+row),'validations',row);
            }
        }
    
   </script> 
<style type="text/css">
body { font:400 13px Arial, Helvetica, sans-serif}
.art-post-inner { width:777px; margin:18px auto;}
table.field { width:100%}
table.field td { vertical-align:top;}
input { margin-left:5px}
input[type='text']{width:400px}
select { width:200px}
button { margin:2px 5px}
</style>
</head>


<body>
<div class="art-post-inner art-article">   
    <form name="input" action="dashboard_mailers_fieldsinfo.php" onsubmit= "return formValidation() " method="post">
        Company Name<input type=text name='companyname' id= 'companyname'/>
        <table id="fields" border="1" cellpadding="5" cellspacing="0" class="field">
           <tr>
                <td></td>
                <td>Field Name</td>
                <td>Type</td>
                <td>Validations:</td>
            </tr>
            <tr>
                <td><INPUT type="checkbox" name="check" disabled></td>
                <td>
                    <select title="Please select the field for mailer" name="field1"  id="field1" onChange="enableSelect(1)" >
                        <option value="-1">--Select--</option>
                        <option value="name">Name</option>
                        <option value="email">Email</option>
                        <option value="mobile">Mobile</option>
                        <option value="country">Country</option>
                        <option value="courses">Courses</option>
                        <option value="experience">Experience</option>
                        <option value="qualification">Qualification</option>
                    </select>
                </td>
                <td>
                    <select title="eg. dropdown, radio button" id="type1" name="type1" disabled onChange="selectValidation(1)">
                        <option value="-1">--Select--</option>
                    </select>
                </td>
                <td>    
                    <select name="validations1[]" id="validations1" disabled  multiple='multiple'>
                    </select></br>
                </td>
            </tr>
            
            
        </table>
        <input type="hidden" name="refreshId" value=<?php if ($this->_tpl_vars['refreshId']): ?> "<?php echo $this->_tpl_vars['refreshId']; ?>
" <?php else: ?> "-1" <?php endif; ?> />
        Enter HTML link:<input type="text" id="htmlthanklink" name="htmlthanklink"/></BR>

        <button type="button" value="+" id="add" title="Add one more field" onClick="return addField()">+</button>Add More 
    
        <button type="button" value="remove" id="remove" title="Remove field" onClick="removeField()">Remove Fields</button>
</br>
<input type="submit" name="submit" value="Generate Code" /> </form>
<form action="dashboard_mailers_fieldsinfo.php" method="post" ><input type="submit" name="reset" value="Reset Fields"><br></form>

<?php echo $this->_tpl_vars['userInfo']; ?>

<?php if ($this->_tpl_vars['mISLink']): ?>
<font size="3" color="red">Link to MIS: <?php echo $this->_tpl_vars['mISLink']; ?>
</font>
<?php endif; ?>
</div>
    

</body>
</html>

