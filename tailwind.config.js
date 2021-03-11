module.exports = {
  purge: [],
  darkMode: 'class', // or 'media' or 'class'
  theme: {

      
        extend: {

          boxShadow: {
            'darkSw': '#9CA3AF 5px 5px, #D1D5DB 10px 10px, #E5E7EB 15px 15px',
            'lightSw': '#374151 5px 5px, #4B5563 10px 10px, #6B7280 15px 15px'
          },
          
          colors: {
            
          },

          animation: {
            'spin-slow': 'spin 2s linear infinite',
            wiggle: 'wiggle 1s ease-in-out infinite',
            beat: 'beat 1s ease-out infinite',
          },

          keyframes: {

            wiggle: {
              '0%, 100%': { transform: 'rotate(-30deg)' },
              '50%': { transform: 'rotate(30deg)' },
            },

            beat: {
              '0%, 100%': { transform: 'scale(1)' },
              '25%': { transform: 'scale(1.2)' },
            },

        },
      },
    },
    variants: {

      boxShadow: ['responsive', 'group-hover', 'focus-within', 'hover', 'focus', 'dark'],

      extend: {
        
        animation: ['hover'],
      
      },
    },
    plugins: [],
  }
