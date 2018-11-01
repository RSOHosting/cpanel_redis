rm -fR /usr/local/cpanel/base/frontend/paper_lantern/rso_redis
mkdir /usr/local/cpanel/base/frontend/paper_lantern/rso_redis
cd /usr/local/cpanel/base/frontend/paper_lantern/rso_redis

echo "Downloading plugin..."
wget -q https://github.com/RSOHosting/cpanel_redis/archive/master.zip -O rso_redis.zip

# Extract archive zip
echo "Extracting plugin..."
unzip rso_redis.zip

# Register plugin with cPanel
/usr/local/cpanel/scripts/install_plugin /usr/local/cpanel/base/frontend/paper_lantern/rso_redis --theme paper_lantern

#Cleanup by removing release
echo "Cleaning Up..."
rm -f rso_redis.zip

# Fix permissions
echo "Finalizing permissions..."
chmod -R 755 /usr/local/cpanel/base/frontend/paper_lantern/rso_redis
