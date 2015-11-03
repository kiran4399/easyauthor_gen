<!DOCTYPE html>
<html>
<head>
<title>EasyAuthor</title>
<!-- Bootstrap -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../prettify.css" rel="stylesheet">
</head>
<body>

 <div id="mainHolder" class="container">
        <div class="row">
            <!-- Source -->
            <div id="componentHolder" class="col-lg-6 col-sm-12">
              <h2>Drag components to...</h2>
              <hr></hr>
              <div id="componentsTabPane">
                <ul class="nav nav-tabs" id="formtabs">
                  <!-- Tab nav -->
                  <li class="active"><a href="#inputs" data-toggle="tab">Input</a></li>
                  <li><a href="#radioscheckboxes" data-toggle="tab">Radios / Checkboxes</a></li>
                  <li><a href="#select" data-toggle="tab">Select</a></li>
                  <li><a href="#buttons" data-toggle="tab">Buttons</a></li>
                </ul>
                <form class="form-horizontal" id="components">
                  <fieldset>
                    <div class="tab-content">
                    
                      <!-- Input pane -->
                      <div id="inputs" class="sourceHolder connectedSortable tab-pane active">
                        <!-- Input alternatives here -->
                        <div class="form-group">

  <!-- Text input -->
  <label class="col-sm-4 control-label" for="textInput">Text Input</label>
  <div class="col-sm-7">
    <input id="textInput" name="textInput" type="text" placeholder="placeholder" class="form-control">
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">
  
  <!-- Password input -->
  <label class="col-sm-4 control-label" for="passwordInput">Password Input</label>
  <div class="col-sm-7">
    <input id="passwordInput" name="passwordInput" type="password" placeholder="placeholder" class="form-control">
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">
  
  <!-- Prepend Text -->
  <label class="col-sm-4 control-label" for="prependText">Prepend Text</label>
  <div class="col-sm-7">
    <div class="input-group">
      <span class="input-group-addon">prepend</span>
      <input id="prependText" name="prependText" type="text" class="form-control" placeholder="placeholder">
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Append Text -->
  <label class="col-sm-4 control-label" for="appendText">Append Text</label>
  <div class="col-sm-7">
    <div class="input-group">
      <input id="appendText" name="appendText" type="text" class="form-control" placeholder="placeholder">
      <span class="input-group-addon">append</span>
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Prepend Checkbox -->
  <label class="col-sm-4 control-label" for="prependCheckbox">Prepend Checkbox</label>
  <div class="col-sm-7">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox">
      </span>
      <input id="prependCheckbox" name="prependCheckbox" type="text" class="form-control" placeholder="placeholder">
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">
  
  <!-- Append Checkbox -->
  <label class="col-sm-4 control-label" for="appendCheckbox">Append Checkbox</label>
  <div class="col-sm-7">
    <div class="input-group">
      <input id="appendCheckbox" name="appendCheckbox" type="text" class="form-control" placeholder="placeholder">
      <span class="input-group-addon">
        <input type="checkbox">
      </span>
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">
  
  <!-- Button dropdown -->
  <label class="col-sm-4 control-label" for="buttonDropdown">Button Dropdown</label>
  <div class="col-sm-7">
    <div class="input-group">
      <input id="buttonDropdown" name="buttonDropdown" type="text" class="form-control" placeholder="placeholder">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
        <ul class="dropdown-menu pull-right" role="menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Textarea -->
  <label class="col-sm-4 control-label" for="textarea">Text Area</label>
  <div class="col-sm-7">
    <div class="input-group">
      <textarea id="textarea" name="textarea" class="form-control">Default text</textarea>
    </div>
    <p class="help-block">help</p>
  </div>
</div>

                      </div>
                      
                      <!-- Radio pane -->
                      <div id="radioscheckboxes" class="sourceHolder connectedSortable tab-pane">
                        <!-- radio and checkbox alternatives here -->
                         <div class="form-group">
    
  <!-- Inline radios -->
  <label class="col-sm-4 control-label">Inline radios</label>
  <div class="col-sm-7">
    <label class="radio-inline" for="radios">
      <input id="radios-0" name="radios" value="option0" type="radio">
      Option 0
    </label>
    <p class="help-block">help</p>
  </div>
 </div>

<div class="form-group">
  
  <!-- Multiple radios -->
  <label class="col-sm-4 control-label" for="textInput">Multiple radios</label>
  <div class="col-sm-7">
    <label class="radio" for="radios">
      <input type="radio" name="radios" id="radios-0" value="Option one" checked="checked">
      Option one
    </label>
    <label class="radio" for="radios">
      <input type="radio" name="radios" id="radios-1" value="Option two">
      Option two
    </label>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Inline checkbox -->
  <label class="col-sm-4 control-label">Inline checkboxes</label>
  <div class="col-sm-7">
    <label for="checkboxes" class="checkbox-inline">
      <input id="checkboxes-0" name="checkboxes" value="option0" type="checkbox">
      Option 0
    </label>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Multiple checkboxes -->
  <label class="col-sm-4 control-label" for="textInput">Multiple checkboxes</label>
  <div class="col-sm-7">
    <label class="checkbox" for="checkboxes">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="Option one" checked="checked">
      Option one
    </label>
    <label class="checkbox" for="checkboxes">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Option two">
      Option two
    </label>
    <p class="help-block">help</p>
  </div>
</div>
                        
                        
                      </div>
                      
                      <!-- Select pane -->
                      <div id="select" class="sourceHolder connectedSortable tab-pane">
                        <!-- Select alternatives here -->
                        
                        <div class="form-group">
  
  <!-- Select single -->
  <label class="col-sm-4 control-label" for="selectSingle">Select Single</label>
  <div class="col-sm-7">
    <select id="selectSingle" name="selectSingle" class="form-control">
      <option value="opt1">Option one</option>
      <option value="opt2">Option two</option>
    </select>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Select multiple -->
  <label class="col-sm-4 control-label" for="selectMultiple">Select Multiple</label>
  <div class="col-sm-7">
    <select id="selectMultiple" name="selectMultiple" class="form-control" multiple="multiple">
      <option value="opt1">Option one</option>
      <option value="opt2">Option two</option>
    </select>
    <p class="help-block">help</p>
  </div>
</div>
                        
                      </div>
                      
                      <!-- Button pane -->
                      <div id="buttons" class="sourceHolder connectedSortable tab-pane">
                        <!-- Button alternatives here -->
                        
                        
                        
                        <div class="form-group">
  
  <!-- File button -->
  <label class="col-sm-4 control-label" for="fileButton">File Button</label>
  <div class="col-sm-7">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Single button -->
  <label class="col-sm-4 control-label" for="singleButton">Single Button</label>
  <div class="col-sm-7">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">

  <!-- Double button -->
  <label class="col-sm-4 control-label" for="button1">Double Button</label>
  <div class="col-sm-7">
    <button id="button1" name="button1" class="btn btn-success">Success Button</button>
    <button id="button2" name="button2" class="btn btn-danger">Danger Button</button>
    <p class="help-block">help</p>
  </div>
</div>

<div class="form-group">
  <!-- Button group -->
  
  <label class="col-sm-4 control-label" for="button1">Button Group</label>
  <div class="col-sm-7">
    <div class="btn-group">
      <button id="button1" name="button1" type="button" class="btn btn-default">Left</button>
      <button id="button2" name="button2" type="button" class="btn btn-default">Middle</button>
      <button id="button3" name="button3" type="button" class="btn btn-default">Right</button>
    </div>
    <p class="help-block">help</p>
  </div>
</div>
                        
                        
                      </div>
                      
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
            
            <!-- Target -->
            <div id="formVisualizer" class="col-lg-6 col-sm-12">
              <form class="form-horizontal area">
                <div id="target" class="connectedSortable">
                <div class='container'>

    <section id="wizard">
        <div class="page-header">
            <h1>EasyAuthor </h1>
        </div>
        <form id="commentForm" method="get" action="" class="form-horizontal">
            <div id="rootwizard">
                <ul>


                    <li><a href="#tab1" data-toggle="tab">Context</a></li>
                    <li><a href="#tab2" data-toggle="tab">Goals</a></li>
                    <li><a href="#tab3" data-toggle="tab">Process</a></li>
                    <li><a href="#tab4" data-toggle="tab">Role</a></li>
                    <li><a href="#tab5" data-toggle="tab">Environment</a></li>
		    <li><a href="#tab6" data-toggle="tab">Evaluation</a></li>
                    <li><a href="#tab7" data-toggle="tab">Instructional Material</a></li>
                </ul>
                <div id="bar" class="progress progress-info progress-striped">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                </div>




                <div class="tab-content">
                    <div class="tab-pane" id="tab1">
                        <div class="control-group">
                            <label class="control-label" for="image">Image</label>
                            <div class="controls">
                                <input type="image" id="imagefield" name="imagefield" class="required image">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="name">Name</label>
                            <div class="controls">
                                <input type="text" id="namefield" name="namefield" class="required">
                            </div>
                        </div>
                    </div>



                        <div class="tab-pane" id="tab2">
                         <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="starting_date">Starting Date</label>
                                <div class="controls">
                                    <input type="date" id="namefield" name="namefield" class="required">
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="deadline">Deadline</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="priority">Priority</label>
                                <div class="controls">
<form action="action_page.php">
  <select name="cars">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  <br>
</form>
                                </div>
                            </div>
   <div class="control-group">
                                <label class="control-label" for="goal_desc">Goal description</label>
                                <div class="controls">
                                    <textarea name="message" rows="10" cols="30">
The cat was playing in the garden.
</textarea>
                                </div>
                            </div>
 <div class="control-group">
                                <label class="control-label" for="bloom">Bloom's level</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>
            </div>


                        <div class="tab-pane" id="tab3">
                            <div class="control-group">
                                <label class="control-label" for="image">Image</label>
                                <div class="controls">
                                    <input type="image" id="imagefield" name="imagefield" class="required image">
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane" id="tab4">
                            <div class="control-group">
                                <label class="control-label" for="image">Image</label>
                                <div class="controls">
                                    <input type="image" id="imagefield" name="imagefield" class="required image">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="language">Language</label>
                                <div class="controls">
                                    <input type="text" id="langfield" name="langfield" class="required">
                                </div>
                            </div>
                        </div>
    


                        <div class="tab-pane" id="tab5">
                            <div class="control-group">
                                <label class="control-label" for="url">URL</label>
                                <div class="controls">
                                    <input type="text" id="urlfield" name="urlfield" class="required url">
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane" id="tab6">
                            <div class="control-group">
                                <label class="control-label" for="image">Image</label>
                                <div class="controls">
                                    <input type="image" id="imagefield" name="imagefield" class="required image">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="language">Language</label>
                                <div class="controls">
                                    <input type="text" id="langfield" name="langfield" class="required">
                                </div>
                            </div>
                        </div>

			<div class="tab-pane" id="tab7">
                            <div class="control-group">
                                <label class="control-label" for="image">Image</label>
                                <div class="controls">
                                    <input type="image" id="imagefield" name="imagefield" class="required image">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield" class="required">
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="language">Language</label>
                                <div class="controls">
                                    <input type="text" id="langfield" name="langfield" class="required">
                                </div>
                            </div>
                        </div>
</div>



                    <ul class="pager wizard">
                        <li class="previous first" style="display:none;"><a href="#">First</a></li>
                        <li class="previous"><a href="#">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="#">Last</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12">
                <input type='text' name='stepid' id='stepid' value='1' size='2' style='width:20px;' />
                <input type='button' class='btn' id='disable-step' value='Disable' />
                <input type='button' class='btn' id='enable-step' value='Enable' />
                <input type='button' class='btn' id='show-step' value='Show' />
                <input type='button' class='btn' id='hide-step' value='Hide' />
                <input type='button' class='btn' id='remove-step' value='Remove' />
            </div>
        </form>




    </section>
</div>  
                </div>
              </form>
            </div>
        </div>        
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <h2>Generated markup</h2>
            <hr></hr>
            <textarea id="formSource"></textarea>
            <p class="followme">
                Follow me on GitHub - <a href="https://github.com/icytin" target="_blank">icytin</a>
            </p>
          </div>
        </div>
    </div>
    
    <div id="contextMenu" class="dropdown clearfix">
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
        <li><a id="edit" tabindex="-1" href="javascript:void(0)">Edit<span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
        <li><a id="validationRules" tabindex="-1" href="javascript:void(0)">Validation rules<span class="pull-right glyphicon glyphicon-wrench"></span></a></li>
        <li class="divider"></li>
        <li><a id="clearForm" tabindex="-1" href="javascript:void(0)">Clear form<span class="pull-right glyphicon glyphicon-trash"></span></a></li>
      </ul>
    </div>
    
    <!-- Confirm modal -->
    <a href="#confirm-modal" class="modal-toggle hidden" data-toggle="modal"><i class="icon-trash"></i> Show Alert Modal</a>
    <div id="confirm-modal" class="modal">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-center">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3 class="center-block">Clear Form</h3>
            </div>
            <div class="modal-body text-center">
                 <p>The entire form will be cleared. Are you sure?</p>
            </div>
            <div class="modal-footer text-center">
              <a id="cancelButton" href="#" data-dismiss="modal" aria-hidden="true" class="btn-lg btn btn-default">Cancel</a>
              <a id="confirmButton" href="#" data-dismiss="modal" aria-hidden="true" class="btn-lg btn btn-danger">OK</a>
            </div>
          </div>
        </div>
    </div>















        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery.bootstrap.wizard.js"></script>
        <script src="../prettify.js"></script>
        <script>
$(document).ready(function() {

        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {

if(index==2) {
				// Make sure we entered the name
				if(!$('#name').val()) {
					alert('You must enter your name');
					$('#name').focus();
					return false;
				}
			}
			
			// Set the name for the next tab
			$('#tab3').html('Hello, ' + $('#name').val());
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard .progress-bar').css({width:$percent+'%'});
            }});

        $('#pills').bootstrapWizard({'tabClass': 'nav nav-pills', 'debug': false, onShow: function(tab, navigation, index) {
            console.log('onShow');
            }, onNext: function(tab, navigation, index) {
            console.log('onNext');
            }, onPrevious: function(tab, navigation, index) {
            console.log('onPrevious');
            }, onLast: function(tab, navigation, index) {
            console.log('onLast');
            }, onTabClick: function(tab, navigation, index) {
            console.log('onTabClick');
            alert('on tab click disabled');
            }, onTabShow: function(tab, navigation, index) {
            console.log('onTabShow');
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#pills .progress-bar').css({width:$percent+'%'});
            }});
        $('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});

        // Disable step
        $('#disable-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('disable', $('#stepid').val());
                });

        // Enable step
        $('#enable-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('enable', $('#stepid').val());
                });

        // Remove step
        $('#remove-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('remove', $('#stepid').val(), true);
                });

        // Show step
        $('#show-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('display', $('#stepid').val());
                });

        // Hide step
        $('#hide-step').on('click', function() {
                $('#rootwizard').bootstrapWizard('hide', $('#stepid').val());
                });

        var $validator = $("#commentForm").validate({
rules: {
emailfield: {
required: true,
email: true,
minlength: 3
},
namefield: {
required: true,
minlength: 3
},
urlfield: {
required: true,
minlength: 3,
url: true
}
}

});

$('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'onNext': function(tab, navigation, index) {
        var $valid = $("#commentForm").valid();
        if(!$valid) {
        $validator.focusInvalid();
        return false;
        }
        }
        });
window.prettyPrint && prettyPrint()
    });
        </script>
        </body>
        </html>
