<script type="text/ng-template" id="img">
	<!--div class="overflow-h">
		<a class="illustration-v3 illustration-{{item.illustration}}" href="#">
			<span class="illustration-bg">
				<span class="illustration-ads">
					<span class="illustration-v3-category">
						<span class="product-category">{{item.product}}</span>
						<span class="product-amount">
							<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'">{{item.titleEn}}</span>
							<span ng-if="$cookies.get('lng') == 'ru'">{{item.titleRu}}</span>
						</span>
					</span>
				</span>
			</span>
		</a>
	</div-->
	<img  ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'" class="img-responsive" style="margin-top: 13px;" src="<?php echo base_url('static/img/'); ?>/{{item.imgEn}}"/>
	<img  ng-if="$cookies.get('lng') == 'ru'" class="img-responsive" style="margin-top: 13px;" src="<?php echo base_url('static/img/'); ?>/{{item.imgRu}}"/>
</script>

<script type="text/ng-template" id="content">
	<h2 ng-cloak>
		{{item.product}} - 
		<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'" ng-cloak>{{item.titleEn}}</span>
		<span ng-if="$cookies.get('lng') == 'ru'" ng-cloak>{{item.titleRu}}</span>
	</h2>
	<table class="table table-bordered table-hover table-condensed table-striped">
		<thead ng-if="$first">
			<tr>
				<th ng-cloak>{{'parameter.name' | i18next}}</th>
				<th ng-cloak>{{'parameter.value' | i18next}}</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="p in item.props">
				<td>
					<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'" ng-cloak>{{p.nameEn}}</span>
					<span ng-if="$cookies.get('lng') == 'ru'" ng-cloak>{{p.nameRu}}</span>
				</td>
				<td>
					<span ng-if="$cookies.get('lng') == 'kk' || $cookies.get('lng') == 'en'" ng-cloak>{{p.valueEn}}<sup ng-if="p.isVolume">3</sup></span>
					<span ng-if="$cookies.get('lng') == 'ru'" ng-cloak>{{p.valueRu}}<sup ng-if="p.isVolume">3</sup></span>
				</td>
			</tr>
		</tbody>
	</table>
</script>

<div ng-controller="PageEquipmentCtrl">	
	<div class="container content-md">
		<div class="row margin-bottom-30">
			<div class="col-md-12">
				<div class="heading /*heading-v1*/ margin-bottom-10">
					<h2 ng-cloak>{{'page.equipment.title' | i18next}}</h2>
				</div>
			</div>
		</div>
		<div class="row margin-bottom-60">
			<div class="col-md-12">
				<div ng-cloak>{{'page.equipment.0' | i18next}}</div>
			</div>
		</div>
		<div class="row margin-bottom-60" ng-repeat="item in items">
			<div class="col-lg-{{item.left}} col-md-{{item.left}} col-sm-{{item.left}}" ng-if="$even">
				<div ng-include="'img'"></div>
			</div>
			<div class="col-lg-{{item.right}} col-md-{{item.right}} col-sm-{{item.right}}" ng-if="$even">
				<div ng-include="'content'"></div>
			</div>

			<div class="col-lg-{{item.right}} col-md-{{item.right}} col-sm-{{item.right}}" ng-if="$odd">
				<div ng-include="'content'"></div>
			</div>
			<div class="col-lg-{{item.left}} col-md-{{item.left}} col-sm-{{item.left}}" ng-if="$odd">
				<div ng-include="'img'"></div>
			</div>
		</div>
	</div>
</div>