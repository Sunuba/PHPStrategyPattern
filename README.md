This is a very basic script demonstrates where and how you can implement 
strategy pattern with PHP. In this example, I kept all interfaces and classes 
in one file for more clear understanding.

You do not need to change any class code. Just write your plane code.

Calculate Triangle:


`echo 'Calculate Triangle: ' . (new Engineer())->calculateArea (10, 10, new Triangle());`


Calculate Rectangle:


`echo 'Calculate Rectangle: ' . (new Engineer())->calculateArea (10, 10, new Rectangle());`


Calculate Circle:


`echo 'Calculate Circle: ' . (new Engineer())->calculateArea (10, 0, new Circle());`