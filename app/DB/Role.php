bplist00�_WebMainResource�	
_WebResourceData_WebResourceMIMEType_WebResourceTextEncodingName_WebResourceFrameName^WebResourceURLO�<html><head><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style><style type="text/css"></style></head><body><pre>&lt;?php namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
	 * users() one-to-many relationship method
	 * 
	 * @return QueryBuilder
	 */
	public function users()
	{
		return $this-&gt;hasMany('App\DB\User\User');
	}

	/**
	 * permissions() many-to-many relationship method
	 * 
	 * @return QueryBuilder
	 */
	public function permissions()
	{
		return $this-&gt;belongsToMany('App\DB\Permission');
	}
}
</pre></body></html>Ytext/htmlUUTF-8P[about:blank    ( : P n � �V`fg                           s