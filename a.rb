class User

    def initialize(id,name,group="guest")
        @id = id
        @name = name
        @group = group

    end

    def whoami
        puts "id="+@id.to_s+", name="+@name+", group="+@group
        if @group == "root"
            puts "I am super user"
        end
    end

    attr_writer :group, :name
    attr_reader :name
    attr_accessor :id
end


root = User.new(1,'root')
root.group = 'root'
root.whoami

guest = User.new(0,'guest')
guest.id = 602
guest.group = 'guest'
guest.whoami
puts guest.id
