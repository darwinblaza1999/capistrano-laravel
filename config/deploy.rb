

        # Set the linked directories (Laravel required folders for deployment)
        set :linked_dirs, %w{storage/framework storage/framework/cache storage/framework/views storage/logs}
        append :linked_files, '.env'
        set :conditionally_migrate, true
        set :keep_releases, 5

        set :pty, true
        set :ssh_options, {:forward_agent => true}

        namespace :deploy do
          task :build do
            on roles(:app) do
              within "#{release_path}" do 
                print "Composing...\n"
                execute "composer", "install", "--prefer-dist", ">", "/dev/null"
                print "Publishing Vendor...\n"
                execute "php", "artisan", "vendor:publish", "--tag=0"
                print "SETTING CORRECT PERMISSIONS\n"
                execute "chmod", "-Rf", "777", "storage/"
                execute "chmod", "-Rf", "777", "bootstrap/cache"
                print "Autoloading Composer\n"
                execute "composer", "dump-autoload"
                execute "php", "artisan", "storage:link"
                print "MIGRATE\n"
                execute  "php", "artisan", "migrate", "--force"
                execute "php", "artisan", "cache:clear"
                execute "php", "artisan", "config:clear"
                execute "php", "artisan", "view:clear"
                execute "php", "artisan", "route:clear"
                print "BUILD DONE\n"
              end
            end
          end

          before  :finishing, :build

        end

