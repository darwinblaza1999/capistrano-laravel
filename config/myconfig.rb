set :ssh_options, {
    user: 'darwin',
    auth_methods: %w(password),
    password:'12345678'
}

server '192.168.9.36', user: 'darwin'
# roles: %w{app web db}
role :web, '192.168.9.36'
role :app, '192.168.9.36'
role :db, '192.168.9.36', :primary => true 