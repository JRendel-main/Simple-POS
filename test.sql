INSERT INTO PRODUCT SET fullname='Ken', amount=100;

create table product_copy like product;

insert into product_copy  from product;

