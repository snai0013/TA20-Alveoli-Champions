library("shiny")

#define IU
ui <- fluidPage(
    
    fluidRow(
        column(3,
               wellPanel(
                   radioButtons("GenderInput","Gender",
                                choices = c("Male","Female"),
                                selected = "Male"),
                   numericInput("HeightInput","Height in cm", value = FALSE, min = 110, max = 210, step = 0.1),
                   numericInput("AgeInput","Age in years", value = FALSE, min = 25, max = 80, step = 1),
                   numericInput("PFInput","Measured Peak Flow (L/min)", value = FALSE, min = 0, max = 700, step = 0.1),
                   helpText("(This is the value obtained after performing the procedure. 
                            The range of Peak Flow is usually between 0 and 700 L/min)"),

               )),
        
        column(3,
               br(),
               br(),
               br(),
               br(),
               h2(imageOutput("face"), align = "center"),
        ),
        
        column(6,
               h2(uiOutput("EPF"), align = "left"),
               h2(uiOutput("PFR"), align = "left"),
               br(),
               h3(uiOutput("result"), align = "left")
        )
    )
    
)