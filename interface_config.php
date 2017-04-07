<?php
/******自定义接口配置文件******/
defined('BASEPATH') OR exit('No direct script access allowed');


/******设置域名常量******/
define('ABOUTDOMAIN','https://about.9drug.com/');

/******设置M(手机wap)站域名常量******/
define('MDOMAIN','http://h5.9drug.test/');

/******设置资源文件域名常量******/
// (开发环境：http://static.9yao.dev/)，(正式环境：https://static.9drug.com/)
define('ASSETSDOMAIN','http://static.9drug.test/');

/************************************公用服务接口************************************/
// 省市县查询 areaId=0(0：查询所有省份，查询市：根据返回的省ID传入areaId可查询出该省所属所有市，查询区县：同查询市)
$config['base_areas'] = 'http://192.168.90.209:18302/mall-api-web/baseinfo/area/getNextLevelArea.html';

// 发送短信验证码接口 参数mobile=13522208413&channel=PHP&sendType=1,memberId为非必传字段
$config['send_message'] = 'http://192.168.90.208:8083/mall-api-mobile/baseinfo/sms/sendMessage.html';

// 支付接口
$config['pay_interface'] = 'http://pay.9drug.test/pay/pay.html';

// 读取缓存数据(仅供内网非Java程序调用) 请求参数module=??&prefix=??&id=??
$config['get_by_cache'] = 'http://192.168.90.208:8081/mall-api-web/baseinfo/cache/common/get';


/************************************商品模块************************************/
//查询商品基本接口 参数(int)productId
$config['base_goods'] = 'http://192.168.90.208:8081/mall-api-web/product/query-base-product.queryBaseProduct.html';

//获取商品图片接口 参数(int)productId
$config['goods_img'] = 'http://192.168.90.208:8081/mall-api-web/product/query-img.queryimg.html';

//商品完整信息查询接口 参数(int)productId						
$config['goods_full'] = 'http://192.168.90.208:8081/mall-api-web/product/query-full-product-msg.queryFullProductMsg.html';

//根据分类ID查询|根据品牌ID查询	参数proCatalogId=3&orderBy=1&pageNum=100&pages=1|productBrandId=1&orderBy=1&pageNum=100&pages=1
$config['goods_by_category_brand'] = 'http://192.168.90.208:8081/mall-api-web/product/query-product-by-brand.html';

//查询销售信息 参数(int)productId
$config['goods_sale_info'] = 'http://192.168.90.208:8081/mall-api-web/product/query-sale-msg.html';

// 根据（分类id）查找出该分类下所有品牌的信息 参数proCatalogId=3
$config['brands_by_category'] = 'http://192.168.90.208:8081/mall-api-web/goods/Information.queryBrandInformation.html';

// 根据分类ID查询本级及父级 参数catalogId=3
$config['cates_by_category'] = 'http://192.168.90.208:8081/mall-api-web/product/query-level.html';

// ES搜索 参数参考：k=感冒&b=18&pageNum=1&pageSize=10&orderBy=1
$config['searchs'] = 'http://192.168.90.207:8080/search-api-web/search/pcsearch';

// 根据商品ID查询当前价格接口 参数productId=91,28,27
$config['goods_price_byId'] = 'http://192.168.90.208:8081/mall-api-web/product/queryNowPrice.html';

// 查询组合商品 参数productId=91
$config['goods_query'] = 'http://192.168.90.208:8081/mall-api-web/product/queryParts.html';

// 查询单个商品所能参加的促销活动列表 参数productId=30945&platform=pc
$config['goood_promotions'] = 'http://192.168.90.208:8081/mall-api-web/product/promotion/queryProductPromotionByProductId';

// 商品评论接口productId=34622&commentScore=5&pageSize=2&pageNum=1
$config['goood_comment'] = '192.168.90.208:8081/mall-api-web/product/productCommnet.html';

//  商品成交记录接口 参数productId=8&pageNo=1&pageSize=20  
$config['trade_recod'] = 'http://192.168.90.208:8081/mall-api-web/product/queryTradeRecod.html';


/************************************会员模块************************************/
// 会员登录 参数loginPassword=222&loginName=15001197882
$config['users_login'] = 'http://192.168.90.208:8081/mall-api-web/login-register/login.Login.html';

// 验证是否已经注册 参数loginName=13522208413
$config['users_is_regist'] = 'http://192.168.90.208:8081/mall-api-web/login-register/registers.Register2.html';

// 会员注册 参数loginPassword=123456&loginName=13522208413&loginSsoName=openid&loginSsoType=wx
$config['users_regist'] = 'http://192.168.90.208:8081/mall-api-web/login-register/register.html';

// 获取会员信息 参数memberId=1
$config['user_info'] = 'http://192.168.90.208:8081/mall-api-web/member/query-member-msg.queryMemberMsg.html';

/*
 *修改会员信息 参数memberId=56&sex=M&realName=真实姓名&birthday=2016-08-17&identifyCard=身份证号
 *		&mobile=13522208413&email=电子邮箱&mberLogo=会员头像地址&isMarried=N&tel=0431-85055502
 *		&provinceId=110000&cityId=110100&areaId=110105&address=朝阳区广渠路&fullAddress=金泰国际大厦906
*/
$config['user_edit_info'] = 'http://192.168.90.208:8081/mall-api-web/member/update-member-msg.updateMemberMsg.html';

// 收货地址查询 参数memberId=56&isDefault=N
$config['user_address'] = 'http://192.168.90.208:8081/mall-api-web/member/query-member-address.queryMemberAddress.html';

// 根据地址id查询单条地址信息 参数memberAddressId=71
$config['user_single_address'] = 'http://192.168.90.208:8081/mall-api-web/member/query-bymemberAddressId.html';

/*
 *收货地址新增 参数memberId=56&consignee=收货人姓名&provinceId=110000&cityId=110100&areaId=110105
 *&address=百子湾桥&fullAddress=金泰国际大厦906&mobile=13522208413&tel=&email=&post=邮编号码&isDefault=Y
*/
$config['user_add_address'] = 'http://192.168.90.208:8081/mall-api-web/member/add-member-address.addMemberAddress.html';

/*
 *收货地址修改 参数memberAddressId=收货地址ID&memberId=56&consignee=收货人姓名&provinceId=110000&cityId=110100&areaId=110105
 *&address=百子湾桥&fullAddress=金泰国际大厦906&mobile=13522208413&tel=&email=&post=邮编号码&isDefault=Y
*/
$config['user_edit_address'] = 'http://192.168.90.208:8081/mall-api-web/member/update-member-address.updateMemberAddress.html';

// 收货地址删除 参数memberAddressId=23&memberId=56
$config['user_del_address'] = 'http://192.168.90.208:8081/mall-api-web/member/delete-member-address.deleteMemberAddress.html';

// 修改密码 参数loginPassword=444&memberId=29
$config['user_edit_pass'] = 'http://192.168.90.208:8081/mall-api-web/login-register/pass.Passchange.html';

// 修改默认选中地址 参数memberAddressId=12&memberId=1
$config['selected_edit'] = 'http://192.168.90.208:8081/mall-api-web/member/updateAddress.modifyMemberAddress.html';

// 通过memberKey查询会员信息 参数memberKey=5d6a2188a9281be357c6d58fa51ce210
$config['user_info_by_memberKey'] = 'http://192.168.90.208:8081/mall-api-web/member/getMemberByKey.queryMemberByKey.html';

// 找回密码 参数loginPassword=123456&mobile=13522208413
$config['user_findPass'] = 'http://192.168.90.208:8081/mall-api-web/login-register/back.Passback.html';

// 第三方快速登陆时调用 参数loginSsoName=oEPpev7pNKyKAP5HUUlxiR1ALQu4&loginSsoType=wx&deviceType=pc
$config['user_fastLogin'] = 'http://192.168.90.208:8081/mall-api-web/member/fastLogin.html';

// 绑定手机号接口 参数loginSsoName=sun&loginSsoType=807836&mobile=15000000000
$config['user_fastLoginBind'] = 'http://192.168.90.208:8081/mall-api-web/member/binding.html';

// 手机验证码登陆 参数mobile=13522208413&code=405963&deviceType=pc&deviceNumber=pc-000000
$config['user_sms_login'] = 'http://192.168.90.208:8081/mall-api-web/login-register/shortcutLogin.html';

// 查询会员已经填写过的发票抬头列表接口 参数memberId=62
$config['user_invoice'] = 'http://192.168.90.208:8081/mall-api-web/order/queryInvoice.html';

/************************************订单模块************************************/
// 提交接口 参数：memberId=5&addressId=77&invoiceTitle=北京国泰永康&invoiceContent=办公用品
$config['order_submit'] = 'http://192.168.90.208:8081/mall-api-web/order/order-submit.html';

// 修改订单(修改已提交未支付订单) 参数：参考http://redmine.9drug.cn/projects/interface/wiki/_%E4%BF%AE%E6%94%B9%E8%AE%A2%E5%8D%95_
$config['order_edit'] = 'http://192.168.90.208:8081/mall-api-web/order/order-update.updateorder.html';

// 取消订单 参数orderNo=14743533930671000201&memberId=1&cancelNotes=取消原因
$config['order_cancel'] = 'http://192.168.90.208:8081/mall-api-web/orders/cancel.html';

// 查看所有订单 参数memberId=1&pageSize=10&pageNO=1
$config['order_lists'] = 'http://192.168.90.208:8081/mall-api-web/order/query-all-order.queryAllProduct.html';

// 查看单条订单 参数memberId=56&orderNo=14750492306041000501
$config['order_one'] = 'http://192.168.90.208:8081/mall-api-web/order/order-current.currentorder.html';

// 订单详情 参数memberId=56&orderNo=14750492306041000501
$config['order_detail'] = 'http://192.168.90.208:8081/mall-api-web/order/query-order-detail.queryProductDetail.html';

// 查询订单支付所需参数接口 参数memberId=56&orderNo=14773593661471010
$config['order_pay_param'] = 'http://192.168.90.208:8081/mall-api-web/order/payment-info.html';

// 查询待付款、待收货、已完成订单数量接口 参数memberId=56
$config['order_status_count'] = 'http://192.168.90.208:8081/mall-api-web/order/queryOrderCount.html';

// 删除订单接口 参数memberId=56&orderNo=14752401697761001701&orderStatus=7
$config['order_del'] = 'http://192.168.90.208:8081/mall-api-web/order/order-delete.html';

// 订单确认收货接口 参数orderNo=14769711532911270&memberId=56
$config['order_confirm'] = 'http://192.168.90.208:8081/mall-api-web/order/order-confirm.html';

// 查询订单物流接口 参数orderNo=14769711532911270&memberId=56
$config['oder_logistic'] = 'http://192.168.90.208:8081/mall-api-web/order/getOrderLog.html';

// 处方药（用户需求）接口 参数reservedMobile=15001197882&productId=1&bookPlatform=ios
$config['prescription'] = 'http://192.168.90.208:8081/mall-api-web/order/prescriptionDrug.html';

// 提交退款申请接口 参数channel=pc&orderNo=1025578500886528&memberId=354&refundReason=rerer
$config['do_refundApply'] = 'http://192.168.90.208:8081/mall-api-web/order/initiateRefund.html';

// 退款管理列表接口 参数memberId=56&pageSize=10&pageNo=1
$config['refund_list'] = 'http://192.168.90.208:8081/mall-api-web/order/refundList.html';

// 退款详情接口 参数memberId=56&orderNo=14800364758731030&refundApplyNo=1139121764683779
$config['refund_detail'] = 'http://192.168.90.208:8081/mall-api-web/order/getrefundDetail.html';
/************************************购物车模块************************************/
// 添加购物车 参数memberId=5&productId=1&count=5
$config['shopcar_add'] = 'http://192.168.90.208:8081/mall-api-web/shopping/addCart.html';

// 删除购物车单个商品 参数memberId=5&productId=1
$config['shopcar_del_one'] = 'http://192.168.90.208:8081/mall-api-web/shopping/removeProductCart.html';

// 批量删除购物车选中的商品 参数memberId=5
$config['shopcar_clear'] = 'http://192.168.90.208:8081/mall-api-web/shopping/removeProductsCart';

// 修改商品数量(修改商品购物车内某个商品的商品数量) 参数memberId=5&productId=1&count=2
$config['shopcar_edit'] = 'http://192.168.90.208:8081/mall-api-web/shopping/updateProductCart.html';

// 查看购物车 参数memberId=56&pageNum=10&pageSize=1
$config['shopcar_lists'] = 'http://192.168.90.208:8081/mall-api-web/shopping/getCart.getCart.html';

// 查看结算页确认商品信息 参数memberId=56&pageNum=页数&pageSize=条数
$config['shopcar_confirm'] = 'http://192.168.90.208:8081/mall-api-web/shopping/settleAccounts.settleAccounts.html';

//单选选中memberId=1&productId=2&isSelect=true&isAll=true
$config['shopcar_selected'] = 'http://192.168.90.208:8081/mall-api-web/shopping/isHave.html';

//去凑单http://192.168.90.209:18302/mall-api-web/product/promotion/queryProductListByPromotionId.html
$config['shopcar_coudan'] = 'http://192.168.90.208:8081/mall-api-web/product/promotion/queryProductListByPromotionId.html';

//购物车商品选择促销memberId=1&productId=2&promotionId=19&platform=pc
$config['shopcar_cu'] = 'http://192.168.90.208:8081/mall-api-web/shopping/updateProductCartPromotion.html';

// 查看购物车总数量 参数memberId=56
$config['user_cars'] = 'http://192.168.90.208:8081/mall-api-web/shopping/shoppingCart-count.html';

// 银行列表接口 参数paymentTypeId=10
$config['bank_list'] = 'http://192.168.90.208:8081/mall-api-web/payment/queryPaymentBankList.html';

/************************************优惠券模块************************************/
// 该接口用于会员查询自己优惠券功能 参数memberId=19999&useStatus=1
$config['user_couponList'] = 'http://192.168.90.208:8081/mall-api-web/member/coupon/list.html';

// 根据商品ID查询当前可使用的优惠券列表 参数productId=30945
$config['coupon_usablelist'] = 'http://192.168.90.208:8081/mall-api-web/product/coupon/usablelist.html';

// 会员领取优惠券接口 参数memberId=62&memberMobile=18801036912&couponId=5
$config['user_couponObtain'] = 'http://192.168.90.208:8081/mall-api-web/member/coupon/obtain.html';

// 查询会员下单可用优惠券列表 参数memberId=132&productId=1212,1231
$config['user_order_coupon'] = 'http://192.168.90.208:8081/mall-api-web/member/coupon/order/usablelist.html';

// 查询该优惠券可以购买的商品列表信息 参数memberCouponId=12&orderBy=1&pageNum=1&pageSize=20
$config['coupon_goodList'] = 'http://192.168.90.208:8081/mall-api-web/product/coupon/buyProductList.html';


/************************************支付宝快捷登录************************************/
$config['alipayArr'] = array(
	'partner'=>'2088421692694571',
	'alipay_key'=>'5v6gtr7wxh70vfuuq32fq13y0w6htzty'
);

/************************************微信快捷登录************************************/
$config['wxArr'] = array(
	'appid'=>'wx1d36de350d9ce692',
	'secret'=>'9c72fa42d28f781c372353c2f53b0663'
);

/************************************QQ快捷登录************************************/
$config['qqArr'] = array(
	'client_id'=>'101362455',
	'client_secret'=>'dbb0586a02f4206c8015e22e897de045'
);

/************************************小能客服对接配置************************************/
$config['ntalkerArr'] = array(
        'siteid'=>'kf_9490',                                            //企业账号(ID)
        'recepid_sq'=>'kf_9490_1483957442240',          //售前组
        'recepid_sh'=>'kf_9490_1483957461725',          //售后组
        'recepid_tj'=>'kf_9490_1483957489322'           //投建组
);


