<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

    protected $table = 'survey';
    protected $fillable = [
        'name', 'detail'
    ];

    /**
     * Laravel Relations
     */
    public function question() {
        return $this->hasMany('App\Question', 'surveyId', 'id');
    }

    /**
     * Laravel Relations END
     */

    /**
     * @param type $request
     * 
     * @return type
     */
    public static function getSurveyId($request) {

        if (!empty($request->surveyId)) {
            $surveyId = $request->surveyId;
        } else {
            $surveyId = $request->session()->get('surveyId');
        }
        
        return $surveyId;
    }

}
