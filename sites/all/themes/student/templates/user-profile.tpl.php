<?php
/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 */
?>
<?php
global $user;
$userId = render($user_profile['field_full_name']['#object']->uid);
?>
<section class="profile"<?php print $attributes; ?>>
    <div id="content-header">
        <h1><?php print t('Profile'); ?></h1>
        <div class="field field-name-field-teaser">
            <p><?php print t(''); ?></p>
        </div>
    </div>
    <div id="content-main">
        <div class="user-profile-header">
            <div class="image"><?php print render($user_profile['field_profile_picture']); ?></div>
            <div class="content">
                <div class="field user-full-name">
                    <div class="field-label"><?php print t('Full name:'); ?></div>
<?php print $user_profile['field_full_name'][0]['#markup']; ?>          
                </div>
                <div class="field username">
                    <div class="field-label"><?php print t('username:'); ?></div>
                    <div class="field-value"><?php print render($user_profile['field_full_name']['#object']->name); ?></div>
                </div>
                <div class="field email">
                    <div class="field-label"><?php print t('Email:'); ?></div>
                    <div class="field-value"><a href="mailto:<?php print (render($user_profile['field_full_name']['#object']->mail)); ?>"><?php print (render($user_profile['field_full_name']['#object']->mail)); ?></a></div>
                </div>
            </div>
        </div>
        <div class="user-profile-bottom">

     <?php 
      if(!empty($user_profile['field_id_number'])){
        print render($user_profile['field_id_number']);
      }
      else {
        print '<div class="field"><div class="field-label">'. t('ID Number:') .'</div></div>';
      }
      ?>
      <?php 
      if(!empty($user_profile['field_phone'])){
        print render($user_profile['field_phone']);
      }
      else {
        print '<div class="field"><div class="field-label">'. t('Phone Number:') .'</div></div>';
      }
      ?>
            <?php 
      if(!empty($user_profile['field_major'])){
        print render($user_profile['field_major']);
      }
      else {
        print '<div class="field"><div class="field-label">'. t('Major:') .'</div></div>';
      }
      ?>
       <?php 
      if(!empty($user_profile['field_graduate_date'])){
        print render($user_profile['field_graduate_date']);
      }
      else {
        print '<div class="field"><div class="field-label">'. t('Graduate Date:') .'</div></div>';
      }
      ?>
             <?php 
      if(!empty($user_profile['field_certificate_country'])){
        print render($user_profile['field_certificate_country']);
      }
      else {
        print '<div class="field"><div class="field-label">'. t('Certificate Country:') .'</div></div>';
      }
      ?>
        <?php 
      if(!empty($user_profile['field_agpa'])){
        print render($user_profile['field_agpa']);
      }
      else {
        print '<div class="field"><div class="field-label">'. t('AGPA') .'</div></div>';
        
      }
      ?>
          
             

        </div>
        <div class="profile-links-container">
            <div class="edit-profile">
<?php if ($userId == $user->uid) print l(t('Edit your profile'), 'user/' . $userId . '/edit'); ?>
            </div>
        </div>
    
</section>
