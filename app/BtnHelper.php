<?php

use App\MsgApp;

if (!function_exists('btnEdit')) {
  function btnEdit($link)
  {
    return '<a  href="' . $link . '" class="text text-primary mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-edit icon-lg"></en></a>';
  }
}

if (!function_exists('btnDelete')) {
    function btnDelete($link)
    {
        return '<a  href="' . $link . '" onclick="return confirm(' . "'" .  MsgApp::ARE_YOU_SURE . "'" . ')" class="text text-danger mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-trash icon-lg"></en></a>';
    }
}
if (!function_exists('btnView')) {
  function btnView($link)
  {
    return '<a  href="' . $link . '" class="text text-primary mr-2" title=""  data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-eye icon-lg"></en></a>';
  }
}
if (!function_exists('checkBtn')) {
  function checkBtn()
  {
    return '<a  href="javascript:;" class="text text-success mr-2" title="" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
    <en class="la la-check-circle icon-lg"></en></a>';
  }
}

if (!function_exists('btnOnly')) {
  function btnOnly($cls, $icon)
  {
    return '<a  href="javascript:;" class="btn btn-icon '. $cls .' btn-xs mr-2" title="" data-toggle="tooltip" data-placement="top">
    <en class="'. $icon .'"></en></a>';
  }
}

if (!function_exists('btnLink')) {
  function btnLink($link, $cls, $icon)
  {
    return '<a  href="'. $link .'" class="btn btn-icon '. $cls .' btn-xs mr-2" title="" data-toggle="tooltip" data-placement="top" >
    <en class="'. $icon .'"></en></a>';
  }
}