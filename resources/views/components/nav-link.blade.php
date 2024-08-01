<a href="/"
    class="{{ request()->is('/') ? 'rounded-md px-3 py-2 text-sm font-medium bg-gray-900 text-white' : ' rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}rounded-md px-3 py-2 text-sm font-medium text-gray-300"
 aria-current="{{request()->is('/')?'page':'false '}}">{{$slot}}</a>
