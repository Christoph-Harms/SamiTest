<?php

namespace SamiTest;

/** 
 * @api
 * @property $someProp Some random property, only introduced to demonstrate a bug
 */
class ClassA
{
	use SomeTrait;
}