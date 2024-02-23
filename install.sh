# Remove existing directory if it exists
rm -fR /usr/local/cpanel/base/frontend/jupiter/rso_redis

# Create new directory
mkdir /usr/local/cpanel/base/frontend/jupiter/rso_redis
cd /usr/local/cpanel/base/frontend/jupiter/rso_redis

# Download plugin
echo "Downloading plugin..."
wget -q https://github.com/RSOHosting/cpanel_redis/archive/master.zip -O rso_redis.zip

# Extract archive zip
echo "Extracting plugin..."
unzip rso_redis.zip

# Fix folder structure
mv cpanel_redis-master/* ./
mv cpanel_redis-master/.* ./

# Register plugin with cPanel
/usr/local/cpanel/scripts/install_plugin /usr/local/cpanel/base/frontend/jupiter/rso_redis --theme jupiter

# Cleanup by removing release
echo "Cleaning Up..."
rm -f rso_redis.zip

# Fix permissions
echo "Finalizing permissions..."
chmod -R 755 /usr/local/cpanel/base/frontend/jupiter/rso_redis
