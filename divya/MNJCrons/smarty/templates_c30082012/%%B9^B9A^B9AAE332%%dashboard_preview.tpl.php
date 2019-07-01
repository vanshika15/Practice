<?php /* Smarty version 2.6.19, created on 2012-08-13 17:14:24
         compiled from dashboard/dashboard_preview.tpl */ ?>
<link rel="stylesheet" type="text/css" media="screen" href="http://w10.naukri.com/mynauk/css/header.css" />
<link rel="stylesheet" type="text/css" media="screen" href="http://w10.naukri.com/mynauk/css/resume_predit_newv1.css" />
<br>
<div>
<div class="topbr">&nbsp;</div>
<div id="container">
<div id="leftnav">
<p>
<div><img src="http://w10.naukri.com/mynauk/images/rp_lbx_top.gif"></div>
<div class="bxbg pdbx t12"><img src="http://w10.naukri.com/mynauk/images/resume_preview.gif" align="absmiddle"> <b>Preview Profile</b><br>
    <div class="noarr">
      <ul>
        <li id="curhg">Preview Profile</li>
        <!--<li><a href="<?php echo ('RecruitersPreview/view?id='.$this->get_template_vars('ID').'&prv=true&altresid='.$this->get_template_vars('ALTRESID')) ?>">Recruiters Preview</a></li>-->
      </ul>
    </div>
<!--    <div class="t10gry" style="padding:2px 15px 0px 20px">Preview of your resume <br>
    as seen by recruiters</div>-->
</div>
<div><img src="http://w10.naukri.com/mynauk/images/rp_lbx_btm.gif" width="180" height="6"></div>
<!-- preview -->
<div class="brk20">&nbsp;</div>
<!-- active -->
<!--<div><img src="http://w10.naukri.com/mynauk/images/rp_lbx_top.gif"></div>
<div class="bxbg t12" style="padding:10px 25px 0 8px "><img src="http://w10.naukri.com/mynauk/images/edit.gif" align="absmiddle"> <b>Edit Profile</b></div>
<div class="bxbg pdbx">
  <div class="arr">
  <ul style="margin-top:0px">
  <li class="in" style="margin-top:0px"><a href="<?php echo ('ContactInformation/edit?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>" id="in">Contact Details</a></li>
  <li><a href="<?php echo ('ExperienceSummary/edit?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>">Experience Summary</a></li>
  <li><a href="<?php echo ('CVDetails/edit?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>">Attached Resume</a></li>
  <li class="in"><a href="<?php echo ('EducationDetails/edit?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>" id="in">Education</a></li>
  <li><a href="<?php echo ('EmploymentDetails/view?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>">Employment Details</a></li>
  <li class="in"><a href="<?php echo ('ITProjects/view?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>" id="in">Project Details</a></li>
  <li><a href="<?php echo ('ITSkills/edit?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>">IT Skills</a></li>
  <li><a href="<?php echo ('DesiredJob/edit?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>">Desired Job Details</a></li>
  <li><a href="<?php echo ('OtherInfo/edit?id='.$this->get_template_vars('ID').'&prv=true'.'&altresid='.$this->get_template_vars('ALTRESID')) ?>">Others</a><br>
    Languages, <br>Personal Details, <br>Work Authorization, <br>Affirmative Action</li>
  </ul>
   <span class="t10gry">---------------------------------</span>
  </div>
  </div>
   <div class="bxbg" style="padding:0px 10px 10px 8px"> <span class="t12"><img src="http://w10.naukri.com/mynauk/images/cover_letter.gif" align="absmiddle">&nbsp;<b>Cover Letter</b></span><br>
<?php if (! $this->_tpl_vars['NUM_COVER_LETTERS']): ?>
      <div class="t11">
        <div class="t10gry" style="padding:0px 15px 0px 22px">No cover letter created by you yet.</div>
      </div>
<?php else: ?>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['COVER_LETTERS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <div class="t11">
        <div class="t10gry" style="padding:7px 15px 0px 22px"><a href="<?php echo ('CoverLetter/view?id='.$this->get_template_vars('ID').'&DRAID='.$this->_tpl_vars['COVER_LETTERS'][$this->_sections['i']['index']]['DRAID']) ?>"><?php echo $this->_tpl_vars['COVER_LETTERS'][$this->_sections['i']['index']]['DRANAME']; ?>
</a><?php if ($this->_tpl_vars['COVER_LETTERS'][$this->_sections['i']['index']]['STATUS']): ?> [<a href="<?php echo ('CoverLetter/unlink?id='.$this->get_template_vars('ID')) ?>"><b>Detach</b></a>]<?php endif; ?></div>
      </div>
<?php endfor; endif; ?>
<?php endif; ?>
      <div class="t11">
<?php if ($this->_tpl_vars['NUM_COVER_LETTERS']): ?><div class="sp10">&nbsp;</div><div class="t10gry" style="padding:7px 15px 0px 22px">[<a href="<?php echo ('CoverLetter/link?id='.$this->get_template_vars('ID')) ?>"><b>Attach</b></a>]</div><?php endif; ?>
<?php if ($this->_tpl_vars['NUM_COVER_LETTERS'] < 5): ?><?php if (! $this->_tpl_vars['NUM_COVER_LETTERS']): ?><div class="sp10">&nbsp;</div><?php endif; ?><div class="t10gry" style="padding:0px 0px 0px 22px">[<a href="<?php echo ('CoverLetter/create?id='.$this->get_template_vars('ID').'&src=lp') ?>"><b>Create New</b></a>]</div><?php endif; ?>
      </div>
  </div>
  <div><img src="http://w10.naukri.com/mynauk/images/rp_lbx_btm.gif" width="180" height="6"></div>
<div class="brk20">&nbsp;</div>
<div><img src="http://w10.naukri.com/mynauk/images/rp_lbx_top.gif"></div>
<div class="bxbg pdbx"><img src="http://w10.naukri.com/mynauk/images/inactive_resume.gif" align="absmiddle"> <b class="t12"><b>Profiles</b></b><br>
<div class="t10gry" style="padding:2px 15px 0px 20px">Some description about recruiters preview.</div>
<div class="sp10">&nbsp;</div>
<div class="t11" style="padding:2px 15px 0px 20px">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['PROFILES']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div style="padding:7px 15px 0px 0px"><a href="/Preview/view?id=<?php echo $this->_tpl_vars['ID']; ?>
<?php if (! $this->_tpl_vars['PROFILES'][$this->_sections['i']['index']]['ACTIVE']): ?>&altresid=<?php echo $this->_tpl_vars['PROFILES'][$this->_sections['i']['index']]['ALTRESID']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['PROFILES'][$this->_sections['i']['index']]['NAME']; ?>
</a><?php echo $this->_tpl_vars['PROFILES'][$this->_sections['i']['index']]['STATUS']; ?>
</div>
<?php endfor; endif; ?>
<?php if ($this->_tpl_vars['SHOW_PROFILE_CREATE_LINK']): ?>
  <br>[<a href="<?php echo ('NewProfile/listProfiles?id='.$this->get_template_vars('ID')) ?>"><b>Create New</b></a>]<?php endif; ?></div>
</div>
<div><img src="http://w10.naukri.com/mynauk/images/rp_lbx_btm.gif" width="180" height="6"></div>-->
<!-- inactive -->
</p>
</div>
<!-- leftnav ends -->
<div id="rightnav">&nbsp;</div>
<!-- content -->
<div id="content" style="background:#FFF " class="minmax">
<div class="bgwht" style="width:92% ">
<!-- top headings -->
<div class="lf">
<div class="lf hd2" style="padding-top:0px;"><div style="float:left;width:52px"><img src="http://w10.naukri.com/mynauk/images/active-icon.gif" alt="Active Profile" align="absmiddle"></div><div style="float:left">Profile <span style="font:normal  12px verdana; color:#333333">[<?php echo $this->_tpl_vars['PROFILE']; ?>
]</span><br>
<span class="t11" style="color:#767676">Last Updated: <?php echo $this->_tpl_vars['MOD_DT']; ?>
</span></div></div>
<div class="rf"><div class="t11"><b>Profile Completeness <?php echo $this->_tpl_vars['PERCENTAGE']; ?>
%</b></div>
<div class="baro"><div class="barin" style="width:<?php echo $this->_tpl_vars['PERCENTAGE']; ?>
%"><img src="http://w10.naukri.com/mynauk/images/bar_complete.gif" width="1" height="13"></div>
</div></div>
</div>
<div class="sp15">&nbsp;</div>
<!-- top headings -->
<?php if ($this->_tpl_vars['CONFIRMATION_MSG']): ?><div class="conbg"><div class="confirm"><?php echo $this->_tpl_vars['CONFIRMATION_MSG']; ?>
</div></div><br><?php endif; ?>
<br><br><br>
<!-- Contact Details -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" width="12" height="12" align="absmiddle"> Contact Details</div>
<div class="secbx"><div class="bxl">
<?php if ($this->_tpl_vars['CNAME']): ?>
<div class="row"><label>Name:</label><span><?php echo $this->_tpl_vars['CNAME']; ?>
</span></div>
<?php endif; ?>
<div class="row">
  <label>Email Address:</label><span><?php echo $this->_tpl_vars['EMAIL']; ?>
</span></div>
<div class="row"><label>Country:</label><span><?php echo $this->_tpl_vars['COUNTRY']; ?>
</span></div>
<div class="row"><label>Current Location:</label><span><?php echo $this->_tpl_vars['CITY']; ?>
</span></div>
<div class="row"><label>Phone:</label><span><?php echo $this->_tpl_vars['RPHONE']; ?>
</span></div>
<div class="row"><label>Mobile:</label><span><?php echo $this->_tpl_vars['MPHONE']; ?>
</span></div>
</div>
</div>
</div>
<!-- Contact Details -->
<div class="sp20">&nbsp;</div>
<!-- resume summary -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> Experience Summary</div>
<div class="secbx"><div class="bxl">
<div class="row"><label>Total Experience:</label><span><?php echo $this->_tpl_vars['TOTAL_EXP']; ?>
</span></div>
<?php if ($this->_tpl_vars['CTC']): ?><div class="row"><label>Annual Salary:</label><span><?php echo $this->_tpl_vars['CTC']; ?>
</span></div><?php endif; ?>
<div class="row"><label>Functional Area:</label><span><?php echo $this->_tpl_vars['FAREA']; ?>
</span></div>
<div class="row"><label>Role:</label><span ><?php echo $this->_tpl_vars['ROLE']; ?>
</span></div>
<div class="row"><label>Industry:</label><span><?php echo $this->_tpl_vars['IND_TYPE']; ?>
</span></div>
<div class="row"><label>Key Skills:</label><span><?php echo $this->_tpl_vars['KEYWORDS']; ?>
</span></div>
<div class="row"><label>Resume Headline:</label><span><?php echo $this->_tpl_vars['TITLE']; ?>
</span></div>
<!--
<div class="row"><label>Summary:</label><span>Information Architecture, Interaction Design, Web and Desktop application&rsquo;s Usability</span></div>
-->

</div>
</div>
</div>
<!-- resume summary -->
<div class="sp20">&nbsp;</div>
<!-- Your Detailed Resumes -->
<?php if ($this->_tpl_vars['LEN_WORDCV']): ?>
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> Attached Resume</div>
<div class="secbx"><div class="bxl">
<?php if ($this->_tpl_vars['CV_MOD_DT']): ?><div class="row" style="padding-left:40px">Resume was last updated on <?php echo $this->_tpl_vars['CV_MOD_DT']; ?>
</div><?php endif; ?>
</div>
<div class="row"><label>Attached Resume:</label><span><?php echo $this->_tpl_vars['TEXTCV']; ?>
</span></div>
</div>
</div>
<!-- Your Detailed Resume -->
<div class="sp20">&nbsp;</div>
<!-- Your Detailed Resumes -->
<?php elseif ($this->_tpl_vars['LEN_TEXTCV']): ?>
<div class="border">
  <div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> Attached Resume</div>
    <div class="secbx">
      <div class="bxl">
<?php if ($this->_tpl_vars['CV_MOD_DT']): ?><div class="row" style="padding-left:40px">Resume was last updated on <?php echo $this->_tpl_vars['CV_MOD_DT']; ?>
</div><?php endif; ?>
</div>
<div class="row"><label>Attached Resume:</label><span><?php echo $this->_tpl_vars['TEXTCV']; ?>
</span></div>
      </div>
</div>
<!--</div>-->
<!-- Your Detailed Resume -->
<div class="sp20">&nbsp;</div>
<?php else: ?>
<div class="border">
  <div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> Attached Resume</div>
    <div class="secbx">
      <div class="bxl">
        <div class="row" style="padding-left:20px"><img src="http://w10.naukri.com/mynauk/images/exclaim.gif" align="absmiddle">&nbsp;&nbsp;No Details have been added so far</div>
        </div>
      </div>
</div>
<div class="sp20">&nbsp;</div>
<?php endif; ?>
<!-- Education Details -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" width="12" height="12" align="absmiddle"> Education</div>
<div class="secbx"><div class="bxl">
<div class="row"><label>Basic Qualification:</label><span><b><?php echo $this->_tpl_vars['UGCOURSE']; ?>
</b></span></div>
<?php if ($this->_tpl_vars['SHOW_UG_DETAILS']): ?>
<div class="row"><label>Specialization:</label><span><?php echo $this->_tpl_vars['UGSPEC']; ?>
</span></div>
<div class="row"><label>Institute Name:</label><span><?php echo $this->_tpl_vars['UGINST']; ?>
</span></div>
<div class="row"><label>Year:</label><span><?php echo $this->_tpl_vars['UGYEAR']; ?>
</span></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_PG_DETAILS']): ?>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<div class="row"><label>PG Qualification:</label><span><b><?php echo $this->_tpl_vars['PGCOURSE']; ?>
</b></span></div>
<div class="row"><label>Specialization:</label><span><?php echo $this->_tpl_vars['PGSPEC']; ?>
</span></div>
<div class="row"><label>Institute Name:</label><span><?php echo $this->_tpl_vars['PGINST']; ?>
</span></div>
<div class="row"><label>Year:</label><span><?php echo $this->_tpl_vars['PGYEAR']; ?>
</span></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_PPG_DETAILS']): ?>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<div class="row"><label>Doctrate Qualification:</label><span><b><?php echo $this->_tpl_vars['PPGCOURSE']; ?>
</b></span></div>
<div class="row"><label>Specialization:</label><span><?php echo $this->_tpl_vars['PPGSPEC']; ?>
</span></div>
<div class="row"><label>Institute Name:</label><span><?php echo $this->_tpl_vars['PPGINST']; ?>
</span></div>
<div class="row"><label>Year:</label><span><?php echo $this->_tpl_vars['PPGYEAR']; ?>
</span></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_DIPLOMA_DETAILS']): ?>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['DIPLOMA']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="row"><label>Diploma Course:</label><span><?php echo $this->_tpl_vars['DIPLOMA'][$this->_sections['i']['index']]; ?>
</span></div>
<?php endfor; endif; ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- Education Details -->
<div class="sp20">&nbsp;</div>
<!-- Work Experience -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> Employment Details</div>
<div class="secbx"><div class="bxl">
<?php if ($this->_tpl_vars['SHOW_SUMMARY']): ?>
<div class="row"><label>Summary:</label>
<span><?php echo $this->_tpl_vars['SUMMARY']; ?>
</span></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_CURR_EMP']): ?>
<div class="row"><label>Current Employer:</label>
<span><b><?php echo $this->_tpl_vars['CURR_ORGN']; ?>
</b> &nbsp;&nbsp;<a href="<?php echo ('EmploymentDetails/edit?id='.$this->get_template_vars('ID').'&EXPID='.$this->get_template_vars('CURR_ORGN_ID').'&altresid='.$this->get_template_vars('ALTRESID')) ?>" class="t10" style="color:#0000FF"></a>  <a href="<?php echo ('EmploymentDetails/delete?id='.$this->get_template_vars('ID').'&EXPID='.$this->get_template_vars('CURR_ORGN_ID').'&altresid='.$this->get_template_vars('ALTRESID')) ?>" style="color:#0000FF" class="t10"></a> </span></div>
<div class="row"><label>Designation:</label><span><?php echo $this->_tpl_vars['CURR_DESIG']; ?>
</span></div>
<div class="row"><label>Duration:</label><span><?php echo $this->_tpl_vars['CURR_DURATION']; ?>
</span></div>
<div class="row"><label>Job Pro</label><span><?php echo $this->_tpl_vars['CURR_PROFILE']; ?>
</span></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_CURR_EMP'] || $this->_tpl_vars['SHOW_PREV_EMP'] || $this->_tpl_vars['SHOW_OTHER_EMP']): ?>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<?php else: ?>
<div class="row" style="padding-left: 20px;"><img src="http://w10.naukri.com/mynauk/images/exclaim.gif" align="absmiddle">&nbsp;&nbsp;No Details have been added so far</div>
<div class="row" style="padding-left: 35px;"><a href="<?php echo ('EmploymentDetails/add?id='.$this->get_template_vars('ID').'&type=O&prv=true&altresid='.$this->get_template_vars('ALTRESID')) ?>"></a></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_PREV_EMP']): ?>
<div class="row"><label>Previous Employer:</label><span><b><?php echo $this->_tpl_vars['PREV_ORGN']; ?>
</b> &nbsp;&nbsp;<a href="<?php echo ('EmploymentDetails/edit?id='.$this->get_template_vars('ID').'&EXPID='.$this->get_template_vars('PREV_ORGN_ID').'&altresid='.$this->get_template_vars('ALTRESID')) ?>" class="t10" style="color:#0000FF"></a>  <a href="<?php echo ('EmploymentDetails/delete?id='.$this->get_template_vars('ID').'&EXPID='.$this->get_template_vars('PREV_ORGN_ID').'&altresid='.$this->get_template_vars('ALTRESID')) ?>" style="color:#0000FF" class="t10"></a> </span></div>
<div class="row"><label>Designation:</label><span><?php echo $this->_tpl_vars['PREV_DESIG']; ?>
</span></div>
<div class="row"><label>Duration:</label><span><?php echo $this->_tpl_vars['PREV_DURATION']; ?>
</span></div>
<div class="row"><label>Job Pro</label><span><?php echo $this->_tpl_vars['PREV_PROFILE']; ?>
</span></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_CURR_EMP'] || $this->_tpl_vars['SHOW_PREV_EMP'] || $this->_tpl_vars['SHOW_OTHER_EMP']): ?>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['SHOW_OTHER_EMP']): ?>
<div class="row"><label><b>Other Employers</b></label><span>&nbsp;</span></div>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['OTHER_EXP_DETAILS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="row"><label>Employer Name:</label><span><b><?php echo $this->_tpl_vars['OTHER_EXP_DETAILS'][$this->_sections['i']['index']]['ORGN']; ?>
</b> &nbsp;&nbsp;<a href="<?php  echo ('EmploymentDetails/edit?id='.$this->get_template_vars('ID').'&EXPID='.$this->_tpl_vars['OTHER_EXP_DETAILS'][$this->_sections['i']['index']]['EXPID'].'&altresid='.$this->get_template_vars('ALTRESID'));  ?>" class="t10" style="color:#0000FF"></a>  <a href="<?php  echo ('EmploymentDetails/delete?id='.$this->get_template_vars('ID').'&EXPID='.$this->_tpl_vars['OTHER_EXP_DETAILS'][$this->_sections['i']['index']]['EXPID'].'&altresid='.$this->get_template_vars('ALTRESID'));  ?>" style="color:#0000FF" class="t10"></a> </span></div>
<div class="row"><label>Duration:</label><span><?php echo $this->_tpl_vars['OTHER_EXP_DETAILS'][$this->_sections['i']['index']]['DURATION']; ?>
</span></div>
<div class="row"><label>Designation:</label><span><?php echo $this->_tpl_vars['OTHER_EXP_DETAILS'][$this->_sections['i']['index']]['DESIG']; ?>
</span></div>
<div class="row"><label>Job Pro</label><span><?php echo $this->_tpl_vars['OTHER_EXP_DETAILS'][$this->_sections['i']['index']]['PROFILE']; ?>
</span></div>
<?php endfor; endif; ?>
<?php endif; ?>
</div>
<!-- edit -->
</div>
</div>
<!-- Work Experience -->
<div class="sp20">&nbsp;</div>
<!-- Project Details -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" width="12" height="12" align="absmiddle"> Project Details</div>
<div class="secbx"><div class="bxl">
<?php if ($this->_tpl_vars['SHOW_PROJECTS']): ?>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['PROJECTS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="row"><label>Client Name:</label><span><b> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['CLIENT']; ?>
 </b>&nbsp;&nbsp;<a href="<?php  echo ('ITProjects/editProject?id='.$this->get_template_vars('ID').'&prId='.$this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['PROJ_ID'].'&altresid='.$this->get_template_vars('ALTRESID'));  ?>" class="t10" style="color:#0000FF"></a>  <a href="<?php  echo ('ITProjects/deleteProject?id='.$this->get_template_vars('ID').'&prId='.$this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['PROJ_ID'].'&altresid='.$this->get_template_vars('ALTRESID'));  ?>" style="color:#0000FF" class="t10"></a> </span></div>
<div class="row"><label>Duration:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['DURATION']; ?>
 </span></div>
<!--
<div class="row"><label>Title:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['TITLE']; ?>
</span></div>
<div class="row"><label>Location:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['LOCATION']; ?>
 </span></div>
<div class="row"><label>Site:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['SITE']; ?>
 </span></div>
<div class="row"><label>Nature of Employment</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['EMP_NATURE']; ?>
 </span></div>
<div class="row"><label>Project Details</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['DETAILS']; ?>
 </span></div>
<div class="row"><label>Role:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['ROLE']; ?>
 </span></div>
<div class="row"><label>Designation:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['DESIG']; ?>
 </span></div>
<div class="row"><label>Team Size:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['TEAMSIZE']; ?>
 </span></div>
<div class="row"><label>Skills Used:</label><span> <?php echo $this->_tpl_vars['PROJECTS'][$this->_sections['i']['index']]['SKILLS']; ?>
 </span></div> -->
<?php endfor; endif; ?>
<?php else: ?>
<div class="row" style="padding-left:20px"><img src="http://w10.naukri.com/mynauk/images/exclaim.gif" align="absmiddle">&nbsp;&nbsp;No Details have been added so far</div>
<?php endif; ?>
</div>
</div>
</div>
<!-- Project Details -->
<div class="sp20">&nbsp;</div>
<!-- IT Skills -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> IT Skills</div>
<?php if ($this->_tpl_vars['ITSKILLS']): ?>
<div style="padding:10px 0px 0 10px" class="t12 row">
<div class="s1 lf" style="color:#767676"><b>Skill</b></div>
<div class="s4 lf" style="color:#767676"><b>Version</b></div>
<div class="s5 lf" style="color:#767676;width:95px"><b>Last Used</b></div>
<div class="s5 lf" style="color:#767676;width:95px"><b>Proficiency</b></div>
<div class="s5 lf" style="color:#767676;clear:right;width:95px"><b>Experience</b></div>
<div class="sp5">&nbsp;</div>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ITSKILLS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="row"><div class="s1 lf"><?php echo $this->_tpl_vars['ITSKILLS'][$this->_sections['i']['index']]['NAME']; ?>
</div>
<div class="s4 lf"><?php echo $this->_tpl_vars['ITSKILLS'][$this->_sections['i']['index']]['VERSION']; ?>
</div>
<div class="s5 lf" style="width:95px"><?php echo $this->_tpl_vars['ITSKILLS'][$this->_sections['i']['index']]['LAST_USED']; ?>
</div>
<div class="s5 lf" style="width:95px"><?php echo $this->_tpl_vars['ITSKILLS'][$this->_sections['i']['index']]['PROF_LEVEL']; ?>
</div>
<div class="s5 lf" style="clear:right;width:95px"><?php echo $this->_tpl_vars['ITSKILLS'][$this->_sections['i']['index']]['EXP_TIME']; ?>
</div>
<div class="sp5">&nbsp;</div></div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="padding:10px 0px 0 10px" class="t12 row">
        <div class="row" style="padding-left:20px"><img src="http://w10.naukri.com/mynauk/images/exclaim.gif" align="absmiddle">&nbsp;&nbsp;No Details have been added so far</div>
       <div class="sp5">&nbsp;</div><br>
<?php endif; ?>
	<div class="sp0" style="clear:left">&nbsp;</div></div>

</div>
<!-- IT Skills -->
<div class="sp20">&nbsp;</div>
<!-- Desired Job Details -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> Desired Job Details</div>
<div class="secbx"><div class="bxl">
<div class="row"><label>Prefered Location:</label><span><?php echo $this->_tpl_vars['PREF_JOB_LOC']; ?>
</span></div>
<div class="row"><label>Job Type:</label><span><?php echo $this->_tpl_vars['DJOBTYPE']; ?>
</span></div>
<div class="row"><label>Employment Status:</label><span><?php echo $this->_tpl_vars['EMP_STATUS']; ?>
</span></div>
</div>
</div>
</div>
<!-- Desired Job Details -->
<div class="sp20">&nbsp;</div>
<!-- Others -->
<div class="border">
<div class="rphd"><img src="http://w10.naukri.com/mynauk/images/rp_arrow.gif" align="absmiddle"> Others </div>
<div class="secbx"><div class="bxl">
<div class="row"><label style="color:#000"><b>Languages Known</b></label><span>&nbsp;</span></div>
<?php if ($this->_tpl_vars['SHOW_LANG']): ?>
<div class="row"><label>&nbsp;</label><span>
<table border="0" cellpadding="5" cellspacing="0" class="t12">
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['LANGUAGE']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<tr><td nowrap><?php echo $this->_tpl_vars['LANGUAGE'][$this->_sections['i']['index']]['NAME']; ?>
</td><td nowrap><?php if ($this->_tpl_vars['LANGUAGE'][$this->_sections['i']['index']]['PROF'] || $this->_tpl_vars['LANGUAGE'][$this->_sections['i']['index']]['ABILITY']): ?>:<?php endif; ?></td><td nowrap><?php echo $this->_tpl_vars['LANGUAGE'][$this->_sections['i']['index']]['PROF']; ?>
<?php if ($this->_tpl_vars['LANGUAGE'][$this->_sections['i']['index']]['ABILITY']): ?>(<?php echo $this->_tpl_vars['LANGUAGE'][$this->_sections['i']['index']]['ABILITY']; ?>
)<?php endif; ?></td></tr>
<?php endfor; endif; ?>
<?php else: ?>
<table border="0" cellpadding="5" cellspacing="0" class="t12">
<div style="padding:10px 0px 0 10px" class="t12 row">
<div class="row" style="padding-left:20px"><img src="http://w10.naukri.com/mynauk/images/exclaim.gif" align="absmiddle">&nbsp;&nbsp;No Details have been added so far</div>
<div class="sp5">&nbsp;</div><br>

<?php endif; ?>
</table>
</span></div>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<div class="row"><label style="color:#000"><b>Personal Details</b></label><span>&nbsp;</span></div>
<div class="row"><label>Date of Birth:</label><span><?php echo $this->_tpl_vars['BIRTH_DT']; ?>
</span></div>
<div class="row"><label>Gender:</label><span><?php echo $this->_tpl_vars['GENDER']; ?>
</span></div>
<div class="row"><label>Marital Status:</label><span><?php echo $this->_tpl_vars['MARITAL_STATUS']; ?>
</span></div>
<div class="row"><label>Mailing Address:</label><span><?php echo $this->_tpl_vars['CONTACT_ADDRESS']; ?>
</span></div>
<div class="row"><label>Pincode:</label><span><?php echo $this->_tpl_vars['PIN']; ?>
</span></div>
<div class="row"><label>City:</label><span><?php echo $this->_tpl_vars['MAIL_CITY']; ?>
</span></div>
<div class="row"><label>Alternate Email Id:</label><span><?php echo $this->_tpl_vars['OEMAIL']; ?>
</span></div>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<div class="row"><label style="color:#000"><b>Work Authorization</b></label><span>&nbsp;</span></div>
<div class="row"><label>Work Status for USA:</label><span><?php echo $this->_tpl_vars['WORKSTATUS']; ?>
</span></div>
<div class="row"><label>Other Countries:</label><span><?php echo $this->_tpl_vars['WORKSTATUS_OTHER']; ?>
</span></div>
<div class="row"><label>&nbsp;</label><span class="rpline">&nbsp;</span></div>
<div class="row"><label style="color:#000"><b>Affirmative Action</b></label><span>&nbsp;</span></div>
<div class="row"><label>Category:</label><span><?php echo $this->_tpl_vars['CASTE_ID']; ?>
</span></div>
<div class="row"><label>Physically Challenged:</label><span><?php echo $this->_tpl_vars['DIS_TYPE']; ?>
</span></div>
<?php if ($this->_tpl_vars['DIS_DESC'] != ""): ?>
<div class="row"><label>Description:</label><span><?php echo $this->_tpl_vars['DIS_DESC']; ?>
</span></div>
<?php endif; ?>
</div>
</div>
</div>
<!-- Others -->
<div class="sp20">&nbsp;</div>
</div>
</div>
<!-- content ends -->
</div>
<div class="topbr">&nbsp;</div>
</div>
