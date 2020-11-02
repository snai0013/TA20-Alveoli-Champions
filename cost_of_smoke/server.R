library("shiny")
library('png')

server <- function(input, output) {
    output$EPF <- renderText({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if (input$GenderInput == "Male"){
            PF = round((((input$HeightInput * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
        }
        else {
            PF = round((((input$HeightInput * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
        }
        
        ratio = round(input$PFInput/PF*100,2)
        paste("Estimated Peak FLow:", PF, "L/min")
        
    })
    
    output$PFR <- renderText({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if (input$GenderInput == "Male"){
            PF = round((((input$HeightInput * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
        }
        else {
            PF = round((((input$HeightInput * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
        }
        
        ratio = round(input$PFInput/PF*100,2)
        paste( "Your measured peak flow is", ratio, '% of Required Peak Flow')
        
    })
    
    
    output$face <- renderImage({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if (input$GenderInput == "Male"){
            PF = round((((input$HeightInput * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
        }
        else {
            PF = round((((input$HeightInput * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
        }
        
        ratio = round(input$PFInput/PF*100,2)
        
        
        if (ratio >= 80){
            name = 'green'
        }
        else if (ratio >= 50 & ratio < 80){
            name = 'yellow'
        }
        else if (ratio < 50){
            name = 'red'
        }
        filename <- normalizePath(file.path('./images',
                                            paste(name, '.png', sep='')))
        list(src = filename, width = 170, height = 170,
             alt = paste("Image number", name))
    }, deleteFile = FALSE)
    
    
    output$result <- renderUI({
        req(input$HeightInput,input$AgeInput,input$PFInput)
        
        if (input$GenderInput == "Male"){
            PF = round((((input$HeightInput * 5.48) + 1.58) - (input$AgeInput * 0.041)) * 60,2)
        }
        else {
            PF = round((((input$HeightInput * 3.72) + 2.24) - (input$AgeInput * 0.03)) * 60,2)
        }
        
        ratio = round(input$PFInput/PF*100,2)
        
        url <- a("Lung improvement section", href="https://wnyl.azurewebsites.net/improve-your-lung-health/")
        
        if (ratio >= 80){
            HTML("<b>", "WHAT DOES THE RESULT MEAN:","</b>","Almost normal function, this is under control.")
        }
        else if (ratio >= 50 & ratio < 80){
            HTML("<b>", "WHAT DOES THE RESULT MEAN:","</b>","Narrowed respiratory airways, before it gets worse, 
                 start improving your lungs now.")
        }
        else if (ratio < 50){
            HTML("<b>", "WHAT DOES THE RESULT MEAN:","</b>","Severe narrowing airway, consider medical emergency.")
        }
    })
}