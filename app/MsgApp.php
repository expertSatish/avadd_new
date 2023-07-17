<?php

namespace App;

class MsgApp
{
    const SUPER_ADMIN = 'Super Admin';
    const ADMIN = 'Admin';
    const USER = 'User';
    const Banner = 'Banner';
    const SUPPLIER = 'Supplier';
    const LINK_SUPER = 'superadmin';
    const LINK_ADMIN = 'admin';
    const LINK_USER = 'user';
    const SETTING = 'setting';
    const REQUESTS = 'requests';
    const UNAUTHORIZE_SMS = 'Unauthorized action.';
    const OURCOLLEGE = 'our_college';
    const HospitalPatient = 'hospital-patient';
    const About = 'about';
    const placement = 'placement';

    const ManageINQURY = 'inquries';
    const UN_Sucess = 'Already exist';

    /** Validation Start */
    const VAL_STRING = 'required|between:3,50|regex:/^[&a-zA-Z\s]+$/';
    const VAL_STRING_UNIQUE = 'required|between:2,50|regex:/^[&a-zA-Z\s]+$/|unique:tableName,name,NULL,id,user_id,userId';
    const VAL_STR_UNQ = 'required|between:2,50|regex:/^[&a-zA-Z\s]+$/|unique:tableName';
    const VAL_STRING_NUM = 'required|between:3,50|regex:/^[&a-zA-Z0-9\s]+$/';
    const VAL_EMAIL = 'required|between:3,50|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/|unique:tableName';
    const VAL_MOBILE = 'required|regex:/^[6-9][0-9]{9}$/|unique:tableName';
    const VAL_GST = 'required|regex:/^[0-9]{2}[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}[1-9A-Za-z]{3}$/|unique:tableName';
    const VAL_PAN = 'required|regex:/^[A-Za-z]{5}[0-9]{4}[A-Za-z]$/';
    const VAL_ADDRESS = 'required|regex:/^[#.0-9a-zA-Z\s,-\/]+$/';
    const VAL_PIN = 'required|regex:/^[1-9][0-9]{5}$/';
    const REQ_EXISTS = 'required|exists:tableName,id';
    const FILE_IMF_PDF = 'nullable|mimes:jpeg,png,jpg,pdf|max:10240';
    const REQ_ACC_NO = 'required|regex:/^[0-9]{9,18}$/';
    const REQ_IFSC = 'required|regex:/^[A-Za-z]{4}\d{7}$/';
    const REQ_ARRAY = 'required|array';
    const TABLE_NAME = 'tableName';
    const FILE_PATH = 'upload/';
    /** Validation End */
    /** Database */
    const USERS = 'users';
    const CITY = 'cities';
    const STATE = 'states';
     const REQ = 'required';

    const SUCCESS_ADDED = 'Record Added Successfully';
    const SUCCESS_UPD = 'Record Updated Successfully';
    const SUCCESS_DEL = 'Record Delete Successfully';
    const NOT_ALLOW = 'Request Not Allow';
    const INV_REQ = 'Invalid Reqiuest';
    /** Form Key */
    const NAME = 'name';
    const B_NAME = 'business_name';
    const EMAIL = 'email';

    const ARE_YOU_SURE = 'Are you sure?';
    /** URL And Form Action */
    const BUYER_INDEX = 'buyers.index';

    const USER_TYPE = '[{"key":1,"val":"REQUESTER"},{"key":2,"val":"APPROVER"},{"key":3,"val":"PROCESSOR"},{"key":4,"val":"MANAGER"},{"key":5,"val":"ADMINISTRATOR"}]';

    const USE_MSG = 'Can not delete as it\'s in use.';
    const PATH_GROUP = 'superadmin/setting/requests/group';
    const PATH_DES = '/admin/setting/designation';
    const PATH_DEP = '/admin/setting/department';
    const PATH_USR = 'admin/users';
}
