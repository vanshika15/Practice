<?php /* Smarty version 2.6.19, created on 2009-03-26 11:39:59
         compiled from /usr/local/apache/htdocs/smarty/templates/ni/nidashboard/rdx_previewbox.tpl */ ?>
<div style="margin: 0px auto; padding: 0px; width: 775px;"><br>
<span style="color:#1A42D5;" class="folconfirm">
</span>
</div>
<div align="center">
	<div class="folwid" style="text-align: left;">	
		<table width="777" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		 <td width="378">&nbsp;</td>
		 <td width="399"><img src="<?php echo $this->_tpl_vars['RDX_IMAGES_PATH']; ?>
/new1.gif" width="28" height="16"></td>
	  </tr>
   </table>
	<table style="border-collapse: collapse;" align="center" border="1" bordercolor="#a7d8f8" cellpadding="0" cellspacing="0" height="28" width="777">
	<tbody><tr>
	</tr>
	</tbody></table>	
	
	
<div id='div_layer_top' style="display:none;"></div>
<div id='div_sending_top' style="display:none;"></div>

<div style="line-height:19px;">
<br/>
<div class="reshead"><?php if ($this->_tpl_vars['RESUME_ARR']['NAME'] == 'Confidential'): ?>Name - Confidential<?php else: ?><?php echo $this->_tpl_vars['RESUME_ARR']['NAME']; ?>
<?php endif; ?></div>
<span class="reskey">Email</span><span class="reskey1">: <?php echo $this->_tpl_vars['RESUME_ARR']['EMAIL']; ?>
</span><br>
<?php if ($this->_tpl_vars['RESUME_ARR']['RPHONE'] != ""): ?>
<span class="reskey">Telephone</span><span class="reskey1">: <?php echo $this->_tpl_vars['RESUME_ARR']['RPHONE']; ?>
 </span><br><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['MPHONE'] != ""): ?>
<span class="reskey">Mobile</span><span class="reskey1">: <?php echo $this->_tpl_vars['RESUME_ARR']['MPHONE']; ?>
 </span><br><?php endif; ?>
<span class="reskey">Last Modified </span><span class="reskey1">: <?php echo $this->_tpl_vars['RESUME_ARR']['MODDATE']; ?>
 </span><br><br>
<span class="reshead1"><?php echo $this->_tpl_vars['RESUME_ARR']['HEADLINE']; ?>
</span><br>
<span class="reskey">Key Skills</span>
<span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['KEYSKILLS']; ?>
</span><br>
<?php if ($this->_tpl_vars['RESUME_ARR']['INDUSTRY'] != ""): ?><span class="reskey">Current Industry</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['INDUSTRY']; ?>
</span><br/><?php endif; ?>
<span class="reskey">Current Functional Area</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['FAREA']; ?>
</span><br>
<?php if ($this->_tpl_vars['RESUME_ARR']['CTC'] != ""): ?><span class="reskey">Current Monthly Salary</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['CTC']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['EXP_ARR']['curr']['desig'] || $this->_tpl_vars['EXP_ARR']['curr']['orgn']): ?><span class="reskey">Current Job</span><span class="reskey1"><?php echo $this->_tpl_vars['EXP_ARR']['curr']['desig']; ?>
<?php if ($this->_tpl_vars['EXP_ARR']['curr']['desig'] && $this->_tpl_vars['EXP_ARR']['curr']['orgn']): ?> in <?php endif; ?><?php echo $this->_tpl_vars['EXP_ARR']['curr']['orgn']; ?>
</span><br><?php endif; ?>
<span class="reskey">Current Location</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['CITY']; ?>
 - <?php echo $this->_tpl_vars['RESUME_ARR']['COUNTRY']; ?>
</span><br>
<span class="reskey">Years of Experience</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['TOTALEXPSTRING']; ?>
</span><br/>
<?php if ($this->_tpl_vars['RESUME_ARR']['WORKLEVEL'] != ""): ?><span class="reskey">Work Level</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['WORKLEVEL']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['EXP_ARR']['prev']['desig'] || $this->_tpl_vars['EXP_ARR']['prev']['orgn']): ?><span class="reskey">Previous Job</span><span class="reskey1"><?php echo $this->_tpl_vars['EXP_ARR']['prev']['desig']; ?>
<?php if ($this->_tpl_vars['EXP_ARR']['prev']['desig'] && $this->_tpl_vars['EXP_ARR']['prev']['orgn']): ?> - <?php endif; ?><?php echo $this->_tpl_vars['EXP_ARR']['prev']['orgn']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['PREFWORKLOC'] != ""): ?><span class="reskey">Preferred Work Location</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['PREFWORKLOC']; ?>
</span><br><?php endif; ?>
<span class="reskey">Languages Known</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['LANGSKNOWN']; ?>
</span><br>
</div>
<div class="dot-line"></div>
<div style="line-height:19px;">
<span class="res-bold">Education</span><br>
<span class="reskey">Basic Education</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['GRADCOURSEDETAILS']; ?>
</span><br/>
<?php if ($this->_tpl_vars['RESUME_ARR']['PGCOURSEDETAILS'] != ""): ?><span class="reskey">Post Graduation</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['PGCOURSEDETAILS']; ?>
</span><br/><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['PPGCOURSEDETAILS'] != ""): ?><span class="reskey">Doctrate</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['PPGCOURSEDETAILS']; ?>
</span><br><?php endif; ?>
</div>

<?php if ($this->_tpl_vars['RESUME_ARR']['SUMMARY']): ?>
<div class="dot-line"></div>
<div style="line-height:19px;">
<span class="res-bold">Summary of Skills and Experience</span><br>
<span class="res-text"><?php echo $this->_tpl_vars['RESUME_ARR']['SUMMARY']; ?>
</span><br>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['NUM_SKILL'] > 0): ?>
<div class="dot-line"></div>
<div style="line-height:19px;">
<span class="res-bold">IT Skills</span><br>
<div style="width:710px;">
<span class="restd1"><b>Skill Name</b></span>
<span class="restd2"><b>Last Used</b></span>
<span class="restd3"><b>Proficiency Level</b></span>
<span class="restd4"><b>Experience</b></span><br>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['SKILL_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<span class="restd1"><?php echo $this->_tpl_vars['SKILL_ARR'][$this->_sections['i']['index']]['NAME']; ?>
</span>
<span class="restd2"><?php echo $this->_tpl_vars['SKILL_ARR'][$this->_sections['i']['index']]['LASTUSED']; ?>
</span>
<span class="restd3"><?php echo $this->_tpl_vars['SKILL_ARR'][$this->_sections['i']['index']]['PROF']; ?>
</span>
<span class="restd4"><?php echo $this->_tpl_vars['SKILL_ARR'][$this->_sections['i']['index']]['EXP']; ?>
</span>
<br><br>

<?php endfor; endif; ?>
</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['NUM_PRJ'] > 0): ?>
<div class="dot-line"></div>
<div style="line-height:19px;">
<span class="res-bold">IT Projects</span><br>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['PROJECT_ARR']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<span class="res-text"><b style="color:#666666;"><?php echo $this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['HEADING']; ?>
</b><br>
Project Name : - <?php echo $this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['TITLE']; ?>
<br>
<?php if ($this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['TEAMSIZE'] != ""): ?>Team Size : <?php echo $this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['TEAMSIZE']; ?>
<br><?php endif; ?>
<?php if ($this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['LOCATION'] != ""): ?>Location : <?php echo $this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['LOCATION']; ?>
<br><?php endif; ?>
<?php if ($this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['DETAILS'] != ""): ?>Profile : <?php echo $this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['DETAILS']; ?>
<br><br><?php endif; ?>
<?php if ($this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['ROLE'] != ""): ?>Role : <?php echo $this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['ROLE']; ?>
<br><br><?php endif; ?>
<?php if ($this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['SKILLSUSED']): ?>Skills Used : <?php echo $this->_tpl_vars['PROJECT_ARR'][$this->_sections['i']['index']]['SKILLSUSED']; ?>
<br><?php endif; ?>
<br>
<?php endfor; endif; ?>
</span>
</div>
<?php endif; ?>

<div class="dot-line"></div>
<div style="line-height:19px;">
<span class="res-bold">Personal Details</span><br>
<span class="reskey">Nationality</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['NATIONALITY']; ?>
</span><br>
<span class="reskey">Date of Birth</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['DOB']; ?>
</span><br>
<?php if ($this->_tpl_vars['RESUME_ARR']['RELIGION'] != ""): ?><span class="reskey">Religion</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['RELIGION']; ?>
</span><br><?php endif; ?>
<span class="reskey">Gender</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['GENDER']; ?>
</span>
<br/>
<?php if ($this->_tpl_vars['RESUME_ARR']['MARITALSTATUS'] != ""): ?><span class="reskey">Marital Status</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['MARITALSTATUS']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['DRIVINGLICCOUNTRY'] != ""): ?><span class="reskey">Driving License</span><span class="reskey1">Received from <?php echo $this->_tpl_vars['RESUME_ARR']['DRIVINGLICCOUNTRY']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['PASSPORTEXPIRYDATE'] != ""): ?><span class="reskey">Passport Valid Till </span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['PASSPORTEXPIRYDATE']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['VISASTATUS'] != ""): ?><span class="reskey">Visa Status for Current Location</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['VISASTATUS']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['VISAEXPIRYDATE'] != ""): ?><span class="reskey">Visa Valid Till</span><span class="reskey1"><?php echo $this->_tpl_vars['RESUME_ARR']['VISAEXPIRYDATE']; ?>
</span><br><?php endif; ?>
<?php if ($this->_tpl_vars['RESUME_ARR']['MAILINGADDRESSDETAILS'] != ""): ?><span class="reskey">Mailing Address</span><span class="reskey1"> <?php echo $this->_tpl_vars['RESUME_ARR']['MAILINGADDRESSDETAILS']; ?>
</span><br><?php endif; ?>
<br>
</div>

<?php if ($this->_tpl_vars['RESUME_ARR']['TEXTCV'] != ""): ?>
<div class="dot-line"></div>
<div style="line-height:19px;">
<span class="res-bold">RESUME IN TEXT</span><br>
<span class="res-text"><?php echo $this->_tpl_vars['RESUME_ARR']['TEXTCV']; ?>
</span>
<br><?php endif; ?><br>
</div>
<div class="sp2"><br></div>

	<table width="777" border="0" cellspacing="0" cellpadding="0" align="center">
	  <tr>
		 <td width="378">&nbsp;</td>
		 <td width="399" align="left"><img src="<?php echo $this->_tpl_vars['RDX_IMAGES_PATH']; ?>
/new1.gif" width="28" height="16"></td>
	  </tr>
   </table>
<table style="border-collapse: collapse;" align="center" border="1" bordercolor="#a7d8f8" cellpadding="0" cellspacing="0" height="28" width="777">
	<tbody><tr>
		<td bgcolor="#f1fbff" valign="top">
			<table align="center" border="0" cellpadding="0" cellspacing="1" width="99%">
				<tbody><tr>
									</tr>
				
				</tbody></table>
		</td>
	</tr>
	</tbody></table>


<div id='div_layer_down' style="display:none;"></div>
<div id='div_sending_down' style="display:none;"></div>

</div></div>