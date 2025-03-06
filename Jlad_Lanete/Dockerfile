# Use an official Node.js image instead of plain Ubuntu
FROM node:18

# Set the working directory inside the container
WORKDIR /app

# Copy package.json and package-lock.json first (for caching)
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of the project files
COPY . .

# Expose the port your app uses (e.g., Vite uses 5173)
EXPOSE 5173

# Run the development server
CMD ["npm", "run", "dev"]
