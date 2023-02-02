@extends('layouts.app')

@section('content')
  <div class="page-wrapper">
    <div class="row page-titles">

        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">{{trans('lang.food_plural')}}</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! route('dashboard') !!}">{{trans('lang.dashboard')}}</a></li>
                <li class="breadcrumb-item"><a href= "{!! route('foods') !!}" >{{trans('lang.food_plural')}}</a></li>
                <li class="breadcrumb-item active">{{trans('lang.food_create')}}</li>
            </ol>
        </div>
    </div>

    <div>
    <div class="card-body">
        <div id="data-table_processing" class="dataTables_processing panel panel-default" style="display: none;">Processing...</div>
        <div class="error_top" style="display:none"></div>
       <div class="row restaurant_payout_create">
          <div class="restaurant_payout_create-inner">

            <fieldset>
              <legend>{{trans('lang.food_information')}}</legend>

              <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.food_name')}}</label>
                <div class="col-7">
                  <input type="text" class="form-control food_name" required>
                  <div class="form-text text-muted">
                    {{ trans("lang.food_name_help") }}
                  </div>
                </div>
              </div>

              <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.food_price')}}</label>
                <div class="col-7">
                  <input type="number" class="form-control food_price" required>
                  <div class="form-text text-muted">
                    {{ trans("lang.food_price_help") }}
                  </div>
                </div>
              </div>

              <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.food_discount')}}</label>
                <div class="col-7">
                  <input type="number" class="form-control food_discount">
                  <div class="form-text text-muted">
                    {{ trans("lang.food_discount_help") }}
                  </div>
                </div>
              </div>

              <!-- <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.food_restaurant_id')}}</label>
                <div class="col-7">
                  <select id="food_restaurant" class="form-control" ><option value="">{{trans('lang.select_restaurant')}}</option></select>
                  <div class="form-text text-muted">
                    {{ trans("lang.food_restaurant_id_help") }}
                  </div>
                </div>
              </div> -->

              <div class="form-group row width-50">
                <label class="col-3 control-label">{{trans('lang.food_category_id')}}</label>
                <div class="col-7">
                  <select id='food_category' class="form-control" required><option value="">{{trans('lang.select_category')}}</option></select>
                  <div class="form-text text-muted">
                    {{ trans("lang.food_category_id_help") }}
                  </div>
                </div>
              </div>

              <div class="form-group row width-100">
                <label class="col-3 control-label">{{trans('lang.food_image')}}</label>
                <div class="col-7">
                  <input type="file" onChange="handleFileSelect(event)">
                  <div id="uploding_image"></div>
                  <div class="uploaded_image" style="display:none;"><img id="uploaded_image" src="" width="150px" height="150px;"></div>
                    <div class="form-text text-muted">
                      {{ trans("lang.food_image_help") }}
                    </div>
                </div>
              </div>
      
              <div class="form-group row width-100">
                  <label class="col-3 control-label">{{trans('lang.food_description')}}</label>
                  <div class="col-7">
                    <textarea rows="8" class="form-control food_description" id="food_description"></textarea>
                  </div>       
              </div>
             <div class="form-check width-100">
                    <input type="checkbox" class="food_publish" id="food_publish">
                <label class="col-3 control-label" for="food_publish">{{trans('lang.food_publish')}}</label>
              </div>

              <div class="form-check width-100">
                <input type="checkbox" class="food_nonveg" id="food_nonveg">
                <label class="col-3 control-label" for="food_nonveg">{{ trans('lang.non_veg')}}</label>
              </div>

              <div class="form-check width-100">
                <input type="checkbox" class="food_take_away_option" id="food_take_away_option">
                <label class="col-3 control-label" for="food_take_away_option">{{trans('lang.food_take_away')}}</label>
              </div>              

            </fieldset>

            <fieldset>

              <legend>{{trans('lang.ingredients')}}</legend>

                <div class="form-group row width-50">
                  <label class="col-3 control-label">{{trans('lang.calories')}}</label>
                  <div class="col-7">
                    <input type="number" class="form-control food_calories">
                  </div>
                </div>

                <div class="form-group row width-50">
                  <label class="col-3 control-label">{{trans('lang.grams')}}</label>
                  <div class="col-7">
                    <input type="number" class="form-control food_grams">
                  </div>       
                </div>

                <div class="form-group row width-50">
                  <label class="col-3 control-label">{{trans('lang.fats')}}</label>
                  <div class="col-7">
                    <input type="number" class="form-control food_fats">
                  </div>       
                </div>

                <div class="form-group row width-50">
                  <label class="col-3 control-label">{{trans('lang.proteins')}}</label>
                  <div class="col-7">
                    <input type="number" class="form-control food_proteins">
                  </div>       
                </div>

            </fieldset>

            <fieldset>

              <legend>{{trans('lang.food_size')}}</legend>
              
              <div class="form-group food_size_list extra-row">
              </div>
              
              <div class="form-group row width-100">
                  <div class="col-7"><button type="button" onclick="addSizeFunction()" class="btn btn-primary" id="add_one_btn"> {{trans('lang.add_food_size')}}</button>
                  </div>
              </div>    
                <div class="form-group row width-100" id="add_size_div" style="display:none" >
              	<div class="row"> 
                    <div class="col-6">
                        <label class="col-2 control-label">{{trans('lang.food_size')}}</label>
                        <div class="col-7">
                            <input type="text" class="form-control add_size_title">
                        </div>
                    </div>
                <div class="col-6">
                    <label class="col-3 control-label">{{trans('lang.food_price')}}</label>
                    <div class="col-7">
                        <input type="number" class="form-control add_size_price">
                    </div>
                </div>
                </div>
                </div>  

              <div class="form-group row save_size_btn width-100" style="display:none">
                 <div class="col-7"><button type="button" onclick="saveSizeFunction()" class="btn btn-primary">{{trans('lang.save_food_size')}}</button></div>
              </div>              

            </fieldset>          
           

            <fieldset>
              <legend>{{trans('lang.food_add_one')}}</legend>

                <div class="form-group add_ons_list extra-row">
                </div>

                <div class="form-group row width-100">
                  <div class="col-7"><button type="button" onclick="addOneFunction()" class="btn btn-primary" id="add_one_btn">{{trans('lang.food_add_one')}}</button></div>
	                </div>

                <div class="form-group row width-100" id="add_ones_div" style="display:none" >
                   <div class="row">
                    <div class="col-6">
                    <label class="col-3 control-label">{{trans('lang.food_title')}}</label>
                    <div class="col-7">
                        <input type="text" class="form-control add_ons_title">
                    </div>
                </div>	
                <div class="col-6">
                    <label class="col-3 control-label">{{trans('lang.food_price')}}</label>
                    <div class="col-7">
                        <input type="number" class="form-control add_ons_price">
                    </div> 
                </div>
                </div>
                </div>

                <div class="form-group row save_add_one_btn width-100" style="display:none">
                 <div class="col-7"><button type="button" onclick="saveAddOneFunction()" class="btn btn-primary">{{trans('lang.save_add_ones')}}</button>
                 </div>
                </div>
                
            </fieldset>    

        </div>
    </div>

      <div class="form-group col-12 text-center btm-btn">
          <button type="button" class="btn btn-primary  create_food_btn" ><i class="fa fa-save"></i> {{trans('lang.save')}}</button>
         <a href="{!! route('foods') !!}" class="btn btn-default"><i class="fa fa-undo"></i>{{trans('lang.cancel')}}</a>
      </div>
    </div>
  </div>
</div>


 @endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
 

<script>
var database = firebase.firestore();
var addOnesTitle = [];
var addOnesPrice = [];
var sizeTitle = [];
var sizePrice = [];
var photo ="";
var vandorId;
var vendorUserId = "<?php echo $id; ?>";
console.log(vendorUserId);
getVendorId(vendorUserId).then(data => {
    vandorId = data;
    $(document).ready(function(){

     database.collection('vendor_categories').get().then( async function(snapshots){
       snapshots.docs.forEach((listval) => {
          var data = listval.data();
            $('#food_category').append($("<option></option>")
                    .attr("value", data.id)
                    .text(data.title));
          })
    });

  $(".create_food_btn").click(function(){
    var id = "<?php echo uniqid();?>";
    var name = $(".food_name").val();
    var price = $(".food_price").val();
    var discount = $(".food_discount").val();
    var category = $("#food_category option:selected").val();
    var size = $("#food_size option:selected").val();
    var foodCalories = parseInt($(".food_calories").val());
    var foodGrams = parseInt($(".food_grams").val());
    var foodProteins = parseInt($(".food_proteins").val());
    var foodFats = parseInt($(".food_fats").val());
    var quantity = 0;
    var description = $("#food_description").val();
    var foodPublish = $(".food_publish").is(":checked");
    var nonveg = $(".food_nonveg").is(":checked");
    var foodTakeaway = $(".food_take_away_option").is(":checked");
    var veg = !nonveg;

    if(discount==''){
      discount="0";      
    }

    if(!foodCalories){
      foodCalories=0;
    }
    if(!foodGrams){
      foodGrams=0;
    }
    if(!foodFats){
      foodFats=0;
    }
    if(!foodProteins){
      foodProteins=0;
    }

    if(name == ''){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.enter_food_name_error')}}</p>");
            window.scrollTo(0,0);
    }else if(price == ''){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.enter_food_price_error')}}</p>");
          window.scrollTo(0,0);                 
    }else if(category == ''){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.select_food_category_error')}}</p>");
          window.scrollTo(0,0);
    }else if(description == ''){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.enter_food_description_error')}}</p>");
          window.scrollTo(0,0);
    }else if(parseInt(price) < parseInt(discount)){
          $(".error_top").show();
          $(".error_top").html("");
          $(".error_top").append("<p>{{trans('lang.price_should_not_less_then_discount_error')}}</p>");
          window.scrollTo(0,0);
    

   }else{

    database.collection('vendor_products').doc(id).set({'name':name,'price':price,'disPrice':discount,'vendorID':vandorId,'categoryID':category,'photo':photo,'calories':foodCalories,"grams":foodGrams,'proteins':foodProteins,'fats':foodFats,'description':description,'publish':foodPublish,'nonveg':nonveg,'veg':veg,'addOnsTitle':addOnesTitle,'addOnsPrice':addOnesPrice,'takeawayOption':foodTakeaway,'size':sizeTitle,'sizePrice':sizePrice,'id':id}).then(function(result) {
                window.location.href = '{{ route("foods")}}';

             });
    }
   
})

  })

})
  



var storageRef = firebase.storage().ref('images');
function handleFileSelect(evt) {
  var f = evt.target.files[0];
  var reader = new FileReader();

  reader.onload = (function(theFile) {
    return function(e) {
        
      var filePayload = e.target.result;
      // Generate a location that can't be guessed using the file's contents and a random number
      var hash = CryptoJS.SHA256(Math.random() + CryptoJS.SHA256(filePayload));
      //var f = new Firebase(firebaseRef + 'pano/' + hash + '/filePayload');
      //spinner.spin(document.getElementById('spin'));
      // Set the file payload to Firebase and register an onComplete handler to stop the spinner and show the preview
           
      //var val = $('input[type=file]').val().toLowerCase();
      //var val = "categorytestpng";
        var val =f.name;       
      var ext=val.split('.')[1];
      var docName=val.split('fakepath')[1];
      var filename = (f.name).replace(/C:\\fakepath\\/i, '')

      var timestamp = Number(new Date());      
      var uploadTask = storageRef.child(filename).put(theFile);
      console.log(uploadTask);
      uploadTask.on('state_changed', function(snapshot){
      // Observe state change events such as progress, pause, and resume
      // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
      var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      console.log('Upload is ' + progress + '% done');
       jQuery("#uploding_image").text("Image is uploading...");
      // switch (snapshot.state) {
      //   case firebase.storage.TaskState.PAUSED: // or 'paused'
      //     console.log('Upload is paused');
      //     break;
      //   case firebase.storage.TaskState.RUNNING: // or 'running'
      //     console.log('Upload is running');
      //     jQuery("#uploding_image").text("Upload is running");
      //     break;
      // }
    }, function(error) {
      // Handle unsuccessful uploads
    }, function() {
        uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
            //spinner.stop();
            jQuery("#uploding_image").text("Upload is completed");
            //jQuery("#photo").val(downloadURL);
            photo = downloadURL;
            $("#uploaded_image").attr('src',photo);
            $(".uploaded_image").show();

      });   
    });
    
    };
  })(f);
  reader.readAsDataURL(f);
}   

async function getVendorId(vendorUser){
    var vendorID = '';
    var ref;
    console.log(vendorUser);
    await database.collection('vendors').where('author',"==",vendorUser).get().then(async function(vendorSnapshots){
        var vendorData = vendorSnapshots.docs[0].data();    
        vendorID = vendorData.id;
    })
            return vendorID;
}

function addOneFunction(){
  $("#add_ones_div").show();
  $(".save_add_one_btn").show();
}

function addSizeFunction(){
  $("#add_size_div").show();
  $(".save_size_btn").show();
}


function saveAddOneFunction(){
        var optiontitle = $(".add_ons_title").val();
        var optionPrice = $(".add_ons_price").val();
        $(".add_ons_price").val('');
        $(".add_ons_title").val('');
        if(optiontitle != '' && optionPrice != ''){
          addOnesPrice.push(optionPrice);
          addOnesTitle.push(optiontitle);
          var index = addOnesTitle.length - 1;
          $(".add_ons_list").append('<div class="row" style="margin-top:5px;" id="add_ones_list_iteam_'+index+'"><div class="col-5"><input class="form-control" type="text" value="'+optiontitle+'" disabled ></div><div class="col-5"><input class="form-control" type="text" value="'+optionPrice+'" disabled ></div><div class="col-2"><button class="btn" type="button" onclick="deleteAddOnesSingle('+index+')"><span class="fa fa-trash"></span></button></div></div>');
        }else{
          alert("Please enter Title and Price");
        }
}
function saveSizeFunction(){
        var optiontitle = $(".add_size_title").val();
        var optionPrice = $(".add_size_price").val();
        $(".add_size_price").val('');
        $(".add_size_title").val('');
        if(optiontitle != '' && optionPrice != ''){
          sizePrice.push(optionPrice);
          sizeTitle.push(optiontitle);
          var index = sizeTitle.length - 1;
          $(".food_size_list").append('<div class="row" style="margin-top:5px;" id="add_size_list_iteam_'+index+'"><div class="col-5"><input class="form-control" type="text" value="'+optiontitle+'" disabled ></div><div class="col-5"><input class="form-control" type="text" value="'+optionPrice+'" disabled ></div><div class="col-2"><button class="btn" type="button" onclick="deleteSizeSingle('+index+')"><span class="fa fa-trash"></span></button></div></div>');
        }else{
          alert("Please enter Title and Price");
        }
}
function deleteAddOnesSingle(index){
  addOnesTitle.splice(index,1);
  addOnesPrice.splice(index,1);
  $("#add_ones_list_iteam_"+index).hide();
}
function deleteSizeSingle(index){

  sizeTitle.splice(index,1);
  sizePrice.splice(index,1);
  $("#add_size_list_iteam_"+index).hide();
}
</script>
@endsection