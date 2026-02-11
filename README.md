## Taskbar Links - Roundcube Webmail Plugin

A plugin to add links to Roundcube taskbar / navigation menu

## Description

Add links to the Roundcube taskbar. <br/>
Works with the skins Elastic, Classic and Larry. With Elastic, icons are displayed; with Classic and Larry, only links are displayed.

## Dependencies

testet with Roundcube <br/>
1.5.13 and php 5.6<br/>
1.6.0 and php 7.3<br/>
1.7-rc2 and php 8.4<br/>
Plugin Installer 0.3 and above

## Installing 

### with Composer

add to roundcube composer.json
```
"require": {
    "paddelberg/taskbar-links": "dev-main"
}
```
then run composer update

### manual installation

Download code at https://github.com/paddelberg/taskbar-links<br/>
Create a folder named taskbar_links in the Roundcube plugin folder and upload the code to the folder.<br/>
Then add the plugin to Roundcube config/config.inc.php 
```
$config['plugins'] = array(
    '...',
    'taskbar_links'
);
```
## Configuration
 
add your configuration to Roundcube config/config.inc.php 

example configuration:
```
$config['taskbar_links'] = array (
    '0' => array (
        'url' =>  'https://example.com',
        'label' => 'link', # text/language - link, cloud, calendar, video, image - to add more, see readme file
        'target' => '_blank', # link target
        'user_ids' => '', # show only for this user ids (comma-separated list of user ids), leave blank to show for all users
        'icon' => 'link' # link, cloud, calendar, video, image -> only elastic skin - to add more, see readme file
    ),
    '1' => array (
        'url' =>  'https://example.com',
        'label' => 'cloud',
        'target' => '_blank', 
        'user_ids' => '1,2,3,50', # show only to user ids 1,2,3 and 50
        'icon' => 'cloud'
    )
```

## Add Link text/ icon label

Note that the language files will be overwritten during an update with Composer.

to ad a new text for a link (or label for a icon) open the language file in localization folder ofe this plugin and, for example, add
```
$labels['your_label'] = 'your text';
```
in this example, you can use "your_label" in configuration as label to show the new text

## Add icons

Note that the skin files will be overwritten during an update with Composer.

To add an new icon open css file in skins/elastic/ and add 
```
#taskmenu a.button-taskbar-links-{ICON-NAME}:before {
    content: "\f03e"
}
```
Replace {ICON-NAME} with the name for the icon you want to use in configuration<br/>
for Icons see https://fontawesome.com/v4/icons/ <br/>
choose the Icon you want to use and copy the unicode sign for the icon and paste it into content of the css rule

## License

This project is licensed under the MIT License - see the LICENSE.md file for details

##

<img width="265" height="680" alt="Screenshot Roundcube Taskbar Mobil" src="https://github.com/user-attachments/assets/d362c34f-a256-4049-a7ce-8969f6597457" />
<img width="69" height="629" alt="Screenshot Roundcube Taskbar Small" src="https://github.com/user-attachments/assets/a2d339be-0f3b-404c-981a-4701a96e1bb5" />
<img width="40" height="474" alt="Screenshot Roundcube Taskbar Desktop" src="https://github.com/user-attachments/assets/88105195-e4bf-4391-8211-fe2846b05f06" />
