  // 地点数组
  var locations = [
    {
      name: 'USA Limited',
      add:'Lorem ipsum dolor sit amet consectetur.',
      tel: '4151515',
      email:'daihwhgh@dwa.com',
      lat: 38.9072,
      lng: -77.0369
    },
    {
      name: 'Korea Limited',
      add:'Lorem ipsum dolor sit amet consectetur.',
      tel: '4151515',
      email:'daihwhgh@dwa.com',
      lat: 37.5665,
      lng: 126.9780
    },
    {
      name: 'Distributors in China',
      add:'Lorem ipsum dolor sit amet consectetur.',
      tel: '4151515',
      email:'daihwhgh@dwa.com',
      lat: 31.820330,
      lng: 117.120971
    },
    {
      name: '日本',
      add:'Lorem ipsum dolor sit amet consectetur.',
      tel: '4151515',
      email:'daihwhgh@dwa.com',
      lat: 35.6895,
      lng: 139.6917
    },
    {
      name: '意大利',
      add:'Lorem ipsum dolor sit amet consectetur.',
      tel: '4151515',
      email:'daihwhgh@dwa.com',
      lat: 41.9028,
      lng: 12.4964
    },
  ];


  // 创建地图
  function initMap() {
    // 创建地图对象
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15
    });


    // 全部标记图标样式
    const all_IconUrl = 'data:image/svg+xml,%3Csvg xmlns="http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg" width="28" height="28" viewBox="0 0 28 28"%3E%3Cpath fill="%23ff3c3c" d="M14 2.25A9.75 9.75 0 0 1 23.75 12c0 4.12-2.895 8.61-8.61 13.518a1.75 1.75 0 0 1-2.283-.002l-.378-.328C7.017 20.408 4.25 16.028 4.25 12A9.75 9.75 0 0 1 14 2.25Zm0 6a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5Z"%2F%3E%3C%2Fsvg%3E';

    // 图标尺寸
    const markerIconSize = new google.maps.Size(40, 40);


    // 获取当前位置
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        function(position) {
          var currentLocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          // 设置地图中心为当前位置
          map.setCenter(currentLocation);



          // 创建当前位置标记
          const currentMarker = new google.maps.Marker({
            position: currentLocation,
            map,
            title: 'Current location',
            icon: {
              url: 'data:image/svg+xml,%3Csvg xmlns="http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg" width="28" height="28" viewBox="0 0 28 28"%3E%3Cpath fill="%233b8af5" d="M14 2.25A9.75 9.75 0 0 1 23.75 12c0 4.12-2.895 8.61-8.61 13.518a1.75 1.75 0 0 1-2.283-.002l-.378-.328C7.017 20.408 4.25 16.028 4.25 12A9.75 9.75 0 0 1 14 2.25Zm0 6a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5Z"%2F%3E%3C%2Fsvg%3E',
              scaledSize: markerIconSize
            }
          });
         // 创建currInfoWindow对象
          const currInfoWindow = new google.maps.InfoWindow({
            content: 'Current location'
          });

          // 在地图加载完成后显示currInfoWindow
          google.maps.event.addListenerOnce(map, 'idle', () => {
            currInfoWindow.open(map, currentMarker);
            currentMarker.setMap(map);
          });

          // 点击.my_location 或 位置标记 移动到当前位置标记
          function moveToCurrentLocation() {
            map.panTo(currentLocation);
            map.setZoom(15);
            removeActiveClass();
            removeOnClass();
            showAllListItems(storeList);
            myLocationBtn.classList.add('on');
            currInfoWindow.open(map, currentMarker);
          }

          // 绑定点击事件
          const myLocationBtn = document.querySelector('.my_location');
          myLocationBtn.addEventListener('click', moveToCurrentLocation);

          currentMarker.addListener('click', moveToCurrentLocation);



          // 循环数组
          var markers = [];
          var storeListItems = [];
          var currentInfoWindow = null;
          var storeList = document.getElementById('store-list');

          for (var i = 0; i < locations.length; i++) {
            var location = locations[i];

            // 创建数组内位置全部的标记
            var marker = new google.maps.Marker({
              position: { lat: location.lat, lng: location.lng },
              map,
              title: location.name,
              icon: {
                url: all_IconUrl,
                scaledSize: markerIconSize
              }
            });
            markers.push(marker);

            // 创建独立的InfoWindow对象窗口
            var infoWindow = new google.maps.InfoWindow({
              content: '<strong>' + location.name + '</strong><br>address:' + location.add + '<br>phone:' + location.tel + '<br>email:' + location.email
            });

            // 计算距离
            var distance = getDistance(currentLocation, marker.getPosition());

            // 创建 li 元素
            var listItem = document.createElement('li');
            listItem.id = 'store' + (i + 1);

            // 创建 p 元素
            var nameElement = document.createElement('p');
            nameElement.className = 'name';
            nameElement.innerText = location.name;
            listItem.appendChild(nameElement);

            // 创建 span 元素
            var addElement = document.createElement('span');
            addElement.className = 'add';
            addElement.innerText = location.add;
            listItem.appendChild(addElement);

            // 创建 span 元素
            var telElement = document.createElement('span');
            telElement.className = 'tel';
            var telLink = document.createElement('a');
            telLink.href = 'tel:' + location.tel;
            telLink.innerText = location.tel;
            telElement.appendChild(telLink);
            listItem.appendChild(telElement);

            // 创建 span 元素
            var emailElement = document.createElement('span');
            emailElement.className = 'email';
            var emailLink = document.createElement('a');
            emailLink.href = 'mailto:' + location.email;
            emailLink.innerText = location.email;
            emailElement.appendChild(emailLink);
            listItem.appendChild(emailElement);

            // 创建 i 元素
            var distanceElement = document.createElement('i');
            distanceElement.className = 'distance';
            distanceElement.innerText = distance.toFixed(2) + 'km away from me';
            listItem.appendChild(distanceElement);

            // 将 li 元素添加到 storeList
            storeList.appendChild(listItem);
            storeListItems.push(listItem);

            // 点击标记时的操作
            marker.addListener('click', (function(storeIndex, infoWindow) {
              return function() {
                // 移动地图到该标记位置
                map.panTo(this.getPosition());
                map.setZoom(15);

                // 关闭打开的infoWindow
                if (currentInfoWindow) {
                  currentInfoWindow.close();
                }

                // 移除其它li元素的active类
                for (let i = 0; i < storeListItems.length; i++) {
                  storeListItems[i].classList.remove('active');
                }

                // 给点击的标记加上active类
                var storeListItem = storeListItems[storeIndex];
                storeListItem.classList.add('active');

                removeOnClass();

                // 打开相应的infoWindow
                infoWindow.open(map, this);

                // 更新当前打开的infoWindow
                currentInfoWindow = infoWindow;
              };
            })(i, infoWindow));
          }



          // 点击门店列表项时，移动地图到相应位置
          storeList.addEventListener('click', function(event) {
            const liElement = event.target.closest('li');
            if (liElement && !liElement.classList.contains('active')) {
              const storeId = liElement.id;
              const storeIndex = parseInt(storeId.replace('store', ''));

              // 移除其他li元素的.active类
              const activeElement = storeList.querySelector('.active');
              if (activeElement) {
                activeElement.classList.remove('active');
              }

              // 移动地图到选中的门店位置
              map.panTo(markers[storeIndex - 1].getPosition());
              map.setZoom(15);

              // 关闭打开的infoWindow
              if (currentInfoWindow) {
                currentInfoWindow.close();
              }

              // 创建并打开对应的infoWindow
              var marker = markers[storeIndex - 1];
              var location = locations[storeIndex - 1];
              var infoWindow = new google.maps.InfoWindow({
                content: '<strong>' + location.name + '</strong><br>address:' + location.add + '<br>phone:' + location.tel + '<br>email:' + location.email
              });
              infoWindow.open(map, marker);

              // 更新当前打开的infoWindow
              currentInfoWindow = infoWindow;

              // 给点击的li元素添加.active类
              liElement.classList.add('active');

              removeOnClass();
            }
          });


          // 点击.all_location 显示地图全部标记点
          const markersLength = markers.length;
          const allLocationBtn = document.querySelector('.all_location');
          allLocationBtn.addEventListener('click', () => {
            const bounds = new google.maps.LatLngBounds();
            for (let i = 0; i < markersLength; i++) {
              bounds.extend(markers[i].getPosition());
            }
            map.fitBounds(bounds);

            if (currentInfoWindow) {
              currentInfoWindow.close();
            }
            removeActiveClass();
            removeOnClass();
            allLocationBtn.classList.add('on');
            showAllListItems(storeList);

          });


          // 获取离用户最近的标记
          let minDistance = Infinity;
          let closestMarker = null;
          let closestMarkerPosition = null;

          markers.forEach((marker) => {
            const distance = getDistance(currentLocation, marker.getPosition());
            if (distance < minDistance) {
              closestMarker = marker;
              closestMarkerPosition = marker.getPosition();
              minDistance = distance;
            }
          });

          // 点击.my_nearestn 移动到离我最近的位置
          const myNearestnBtn = document.querySelector('.my_nearestn');
          myNearestnBtn.addEventListener('click', () => {
            // 移动地图到离用户最近的标记位置
            if (closestMarkerPosition) {
              map.panTo(closestMarkerPosition);
              map.setZoom(15);
            };
            removeActiveClass();
            removeOnClass();
            myNearestnBtn.classList.add('on');

            // 隐藏所有的门店列表li元素
            const storeListItems = storeList.querySelectorAll('li');
            storeListItems.forEach((item) => {
              item.style.display = 'none';
            });

            // 显示距离最近的li元素
            const closestStoreListItem = storeList.querySelector('#store' + (markers.indexOf(closestMarker) + 1));
            closestStoreListItem.style.display = 'block';

            // 关闭打开的infoWindow
            if (currentInfoWindow) {
              currentInfoWindow.close();
            }

            // 打开距离最近的标记点的infoWindow
            const closestInfoWindow = new google.maps.InfoWindow({
              content: '<strong>' + locations[markers.indexOf(closestMarker)].name + '</strong><br>address:' + locations[markers.indexOf(closestMarker)].add + '<br>phone:' + locations[markers.indexOf(closestMarker)].tel + '<br>email:' + locations[markers.indexOf(closestMarker)].email
            });
            closestInfoWindow.open(map, closestMarker);

            // 更新当前打开的infoWindow
            currentInfoWindow = closestInfoWindow;

          });

        },
        function() {
          // 处理定位错误
          alert('Unable to obtain your location information.');

          // 循环数组
          var markers = [];
          var storeListItems = [];
          var currentInfoWindow = null;
          var storeList = document.getElementById('store-list');

          for (var i = 0; i < locations.length; i++) {
            var location = locations[i];

            // 创建数组内位置全部的标记
            var marker = new google.maps.Marker({
              position: { lat: location.lat, lng: location.lng },
              map,
              title: location.name,
              icon: {
                url: all_IconUrl,
                scaledSize: markerIconSize
              }
            });
            markers.push(marker);

            // 创建独立的InfoWindow对象窗口
            var infoWindow = new google.maps.InfoWindow({
              content: '<strong>' + location.name + '</strong><br>address:' + location.add + '<br>phone:' + location.tel + '<br>email:' + location.email
            });

            // 创建 li 元素
            var listItem = document.createElement('li');
            listItem.id = 'store' + (i + 1);

            // 创建 p 元素
            var nameElement = document.createElement('p');
            nameElement.className = 'name';
            nameElement.innerText = location.name;
            listItem.appendChild(nameElement);

            // 创建 span 元素
            var addElement = document.createElement('span');
            addElement.className = 'add';
            addElement.innerText = location.add;
            listItem.appendChild(addElement);

            // 创建 span 元素
            var telElement = document.createElement('span');
            telElement.className = 'tel';
            var telLink = document.createElement('a');
            telLink.href = 'tel:' + location.tel;
            telLink.innerText = location.tel;
            telElement.appendChild(telLink);
            listItem.appendChild(telElement);

            // 创建 span 元素
            var emailElement = document.createElement('span');
            emailElement.className = 'email';
            var emailLink = document.createElement('a');
            emailLink.href = 'mailto:' + location.email;
            emailLink.innerText = location.email;
            emailElement.appendChild(emailLink);
            listItem.appendChild(emailElement);

            // 将 li 元素添加到 storeList
            storeList.appendChild(listItem);
            storeListItems.push(listItem);

            // 点击标记时的操作
            marker.addListener('click', (function(storeIndex, infoWindow) {
              return function() {
                // 移动地图到该标记位置
                map.panTo(this.getPosition());
                map.setZoom(15);

                // 关闭当前打开的infoWindow
                if (currentInfoWindow) {
                  currentInfoWindow.close();
                }

                 // 移除其它li元素的active类
                 for (let i = 0; i < storeListItems.length; i++) {
                  storeListItems[i].classList.remove('active');
                }

                // 给点击的标记加上active类
                var storeListItem = storeListItems[storeIndex];
                storeListItem.classList.add('active');

                removeOnClass();

                // 打开相应的infoWindow
                infoWindow.open(map, this);

                // 更新当前打开的infoWindow
                currentInfoWindow = infoWindow;
              };
            })(i, infoWindow));
          }



          function fitBoundsToMarkers() {
            const bounds = new google.maps.LatLngBounds();
            for (let i = 0; i < markersLength; i++) {
              bounds.extend(markers[i].getPosition());
            }
            map.fitBounds(bounds);
          }

          // 设置地图中心点为显示全部标记点
          const markersLength = markers.length;
          fitBoundsToMarkers();



          // 点击门店列表项时，移动地图到相应位置
          storeList.addEventListener('click', function(event) {
            const liElement = event.target.closest('li');
            if (liElement && !liElement.classList.contains('active')) {
              const storeId = liElement.id;
              const storeIndex = parseInt(storeId.replace('store', ''));

              // 移除其他li元素的.active类
              const activeElement = storeList.querySelector('.active');
              if (activeElement) {
                activeElement.classList.remove('active');
              }

              // 移动地图到选中的门店位置
              map.panTo(markers[storeIndex - 1].getPosition());
              map.setZoom(15);

              // 关闭打开的infoWindow
              if (currentInfoWindow) {
                currentInfoWindow.close();
              }

              // 创建并打开对应的infoWindow
              var marker = markers[storeIndex - 1];
              var location = locations[storeIndex - 1];
              var infoWindow = new google.maps.InfoWindow({
                content: '<strong>' + location.name + '</strong><br>address:' + location.add + '<br>phone:' + location.tel + '<br>email:' + location.email
              });
              infoWindow.open(map, marker);

              // 更新当前打开的infoWindow
              currentInfoWindow = infoWindow;

              // 给点击的li元素添加.active类
              liElement.classList.add('active');

              removeOnClass();
            }
          });


          // 点击.all_location 显示地图全部标记点
          const allLocationBtn = document.querySelector('.all_location');
          allLocationBtn.addEventListener('click', () => {
            fitBoundsToMarkers();

            if (currentInfoWindow) {
              currentInfoWindow.close();
              }
            removeActiveClass();
            removeOnClass();
            allLocationBtn.classList.add('on');
            showAllListItems(storeList);
          });


          // 移除定位及最近位置的按钮
          var elements = document.querySelectorAll('.my_location, .my_nearestn');
          elements.forEach(function(element) {
            element.remove();
          });

        }
      );
    } else {
      // 浏览器不支持Geolocation
      alert('Your browser does not support geolocation.');
    }
  }


  // 显示#store-list下所有li元素
  function showAllListItems(list) {
    const storeListItems = list.querySelectorAll('li');
    storeListItems.forEach((item) => {
      item.style.display = 'block';
    });
  }

  // 移除#store-list下的所有li的.active类
  function removeActiveClass() {
    const storeListItems = document.querySelectorAll('#store-list li');
    storeListItems.forEach((item) => {
      item.classList.remove('active');
    });
  }

  // 移除.common_btn下的所有li的.on类
  function removeOnClass() {
      const commonListItems = document.querySelectorAll('.common_btn li');
      commonListItems.forEach(li => {
          li.classList.remove('on');
      });
  }

  // 计算两个位置之间的距离（使用球面法则）
  function getDistance(location1, location2) {
    var lat1 = location1.lat;
    var lng1 = location1.lng;
    var lat2 = location2.lat();
    var lng2 = location2.lng();
    var earthRadius = 6371; // 地球半径（单位：千米）

    var dLat = deg2rad(lat2 - lat1);
    var dLng = deg2rad(lng2 - lng1);

    var a =
      Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
      Math.sin(dLng / 2) * Math.sin(dLng / 2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    var distance = earthRadius * c;

    return distance;
  }

  // 将角度转换为弧度
  function deg2rad(deg) {
    return deg * (Math.PI / 180);
  }