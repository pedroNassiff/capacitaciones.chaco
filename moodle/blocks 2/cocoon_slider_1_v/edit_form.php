<?php

class block_cocoon_slider_1_v_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        global $CFG;

        if (!empty($this->block->config) && is_object($this->block->config)) {
            $data = $this->block->config;
        } else {
            $data = new stdClass();
            $data->slidesnumber = 0;
        }


        // Fields for editing HTML block title and contents.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        $mform->addElement('text', 'config_prev_1', get_string('config_prev_1', 'theme_edumy'));
        $mform->setDefault('config_prev_1', 'PR');
        $mform->setType('config_prev_1', PARAM_TEXT);

        $mform->addElement('text', 'config_prev_2', get_string('config_prev_2', 'theme_edumy'));
        $mform->setDefault('config_prev_2', 'EV');
        $mform->setType('config_prev_2', PARAM_TEXT);

        $mform->addElement('text', 'config_next_1', get_string('config_next_1', 'theme_edumy'));
        $mform->setDefault('config_next_1', 'NE');
        $mform->setType('config_next_1', PARAM_TEXT);

        $mform->addElement('text', 'config_next_2', get_string('config_next_2', 'theme_edumy'));
        $mform->setDefault('config_next_2', 'XT');
        $mform->setType('config_next_2', PARAM_TEXT);

        // Image
        $mform->addElement('filemanager', 'config_image', get_string('config_image', 'theme_edumy'), null,
                array('subdirs' => 0, 'maxbytes' => $maxbytes, 'areamaxbytes' => 10485760, 'maxfiles' => 1,
                'accepted_types' => array('.png', '.jpg', '.gif') ));

        $mform->addElement('text', 'config_yt', get_string('config_yt', 'theme_edumy'));
        $mform->setDefault('config_yt', 'LSmgKRx5pBo');
        $mform->setType('config_yt', PARAM_TEXT);

        $slidesrange = range(0, 12);
        $mform->addElement('select', 'config_slidesnumber', get_string('config_items', 'theme_edumy'), $slidesrange);
        $mform->setDefault('config_slidesnumber', $data->slidesnumber);

        // // Feature 1
        // $mform->addElement('header', 'config_feature_1', get_string('config_feature_1', 'theme_edumy'));
        //
        // $mform->addElement('text', 'config_feature_1_title', get_string('config_title', 'theme_edumy'));
        // $mform->setDefault('config_feature_1_title', 'Design: Over 800 Courses');
        // $mform->setType('config_feature_1_title', PARAM_TEXT);
        //
        // $mform->addElement('text', 'config_feature_1_icon', get_string('config_icon_class', 'theme_edumy'));
        // $mform->setDefault('config_feature_1_icon', 'flaticon-pencil');
        // $mform->setType('config_feature_1_icon', PARAM_TEXT);
        //
        // // Feature 2
        // $mform->addElement('header', 'config_feature_2', get_string('config_feature_2', 'theme_edumy'));
        //
        // $mform->addElement('text', 'config_feature_2_title', get_string('config_title', 'theme_edumy'));
        // $mform->setDefault('config_feature_2_title', 'Business: Over 1,400 Courses');
        // $mform->setType('config_feature_2_title', PARAM_TEXT);
        //
        // $mform->addElement('text', 'config_feature_2_icon', get_string('config_icon_class', 'theme_edumy'));
        // $mform->setDefault('config_feature_2_icon', 'flaticon-student-1');
        // $mform->setType('config_feature_2_icon', PARAM_TEXT);
        //
        // // Feature 3
        // $mform->addElement('header', 'config_feature_3', get_string('config_feature_3', 'theme_edumy'));
        //
        // $mform->addElement('text', 'config_feature_3_title', get_string('config_title', 'theme_edumy'));
        // $mform->setDefault('config_feature_3_title', 'Photography: Over 740 Courses');
        // $mform->setType('config_feature_3_title', PARAM_TEXT);
        //
        // $mform->addElement('text', 'config_feature_3_icon', get_string('config_icon_class', 'theme_edumy'));
        // $mform->setDefault('config_feature_3_icon', 'flaticon-photo-camera');
        // $mform->setType('config_feature_3_icon', PARAM_TEXT);
        //
        // // Feature 4
        // $mform->addElement('header', 'config_feature_4', get_string('config_feature_4', 'theme_edumy'));
        //
        // $mform->addElement('text', 'config_feature_4_title', get_string('config_title', 'theme_edumy'));
        // $mform->setDefault('config_feature_4_title', 'Marketing: Over 200 Courses');
        // $mform->setType('config_feature_4_title', PARAM_TEXT);
        //
        // $mform->addElement('text', 'config_feature_4_icon', get_string('config_icon_class', 'theme_edumy'));
        // $mform->setDefault('config_feature_4_icon', 'flaticon-medal');
        // $mform->setType('config_feature_4_icon', PARAM_TEXT);

        for($i = 1; $i <= $data->slidesnumber; $i++) {
            $mform->addElement('header', 'config_header' . $i , 'Slide ' . $i);

            $mform->addElement('text', 'config_slide_title' . $i, get_string('config_title', 'theme_edumy', $i));
            $mform->setDefault('config_slide_title' .$i , 'Self Education Resources and Infos');
            $mform->setType('config_slide_title' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_slide_subtitle' . $i, get_string('config_subtitle', 'theme_edumy', $i));
            $mform->setDefault('config_slide_subtitle' .$i , 'Technology is brining a massive wave of evolution on learning things on different ways.');
            $mform->setType('config_slide_subtitle' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_slide_btn_text' . $i, get_string('config_button_text', 'theme_edumy', $i));
            $mform->setDefault('config_slide_btn_text' .$i , 'Ready to Get Started?');
            $mform->setType('config_slide_btn_text' . $i, PARAM_TEXT);

            $mform->addElement('text', 'config_slide_btn_url' . $i, get_string('config_button_link', 'theme_edumy', $i));
            $mform->setDefault('config_slide_btn_url' .$i , '#');
            $mform->setType('config_slide_btn_url' . $i, PARAM_TEXT);


            // $filemanageroptions = array('maxbytes'      => $CFG->maxbytes,
            //                             'subdirs'       => 0,
            //                             'maxfiles'      => 1,
            //                             'accepted_types' => array('.jpg', '.png', '.gif'));
            //
            // $f = $mform->addElement('filemanager', 'config_file_slide' . $i, get_string('config_image', 'theme_edumy', $i), null, $filemanageroptions);
        }

        include($CFG->dirroot . '/theme/edumy/ccn/block_handler/edit.php');

    }

    function set_data($defaults) {
      // Begin CCN Image Processing
      if (empty($entry->id)) {
          $entry = new stdClass;
          $entry->id = null;
      }
      $draftitemid = file_get_submitted_draft_itemid('config_image');
      file_prepare_draft_area($draftitemid, $this->block->context->id, 'block_cocoon_slider_1_v', 'content', 0,
          array('subdirs' => true));
      $entry->attachments = $draftitemid;
      parent::set_data($defaults);
      if ($data = parent::get_data()) {
          file_save_draft_area_files($data->config_image, $this->block->context->id, 'block_cocoon_slider_1_v', 'content', 0,
              array('subdirs' => true));
      }
      // END CCN Image Processing

    }
}
