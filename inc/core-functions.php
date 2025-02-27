<?php // Plugin Functions
function course_certificate_add_course_certificate($code, $name, $course, $duration, $award_date, $editid){
	global $wpdb;
    if( is_numeric($editid) && $editid != '' ) {
        $result = $wpdb->update('AB_course_certificates', array(
            'certificate_code' => $code,
            'student_name' => $name,
            'course_name'  => $course,
            'course_duration' => $duration,
            'award_date' => $award_date,
            ),
            array( 'id' => $editid )
        );
    } else {
        $result = $wpdb->insert('AB_course_certificates', array(
            'certificate_code' => $code,
            'student_name' => $name,
            'course_name'  => $course,
            'course_duration' => $duration,
            'award_date' => $award_date,
            )
        );
    }
    return $result;
}

function course_certificate_delete_course_certificate($editid) {
    global $wpdb;
    $result = false;
    if( is_numeric($editid) && $editid != '' ) {
        $result = $wpdb->delete('AB_course_certificates', array( 'id' => $editid ));
    }
    return $result;
}