// 用户名字符验证    
jQuery.validator.addMethod("userName", function(value, element) {    
  return this.optional(element) || /^[a-z_][a-z0-9_]{5,19}$/.test(value);    
}, "用户名为6到20个小写英文字母、数字、下划线，不可以数字开头!");   
