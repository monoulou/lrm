<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_359611da0d94e2daab8b0ea7bb030f01709b4015cb9175762b51facb9353d657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80c6fcacb9466fabc190c8c56baa34675b71d75b728868af418c9acee26f429c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c6fcacb9466fabc190c8c56baa34675b71d75b728868af418c9acee26f429c->enter($__internal_80c6fcacb9466fabc190c8c56baa34675b71d75b728868af418c9acee26f429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_828784c5e2176c192da3e6b470a906d9822303475b2fb28c95f0f2a0f18f3ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828784c5e2176c192da3e6b470a906d9822303475b2fb28c95f0f2a0f18f3ca5->enter($__internal_828784c5e2176c192da3e6b470a906d9822303475b2fb28c95f0f2a0f18f3ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_80c6fcacb9466fabc190c8c56baa34675b71d75b728868af418c9acee26f429c->leave($__internal_80c6fcacb9466fabc190c8c56baa34675b71d75b728868af418c9acee26f429c_prof);

        
        $__internal_828784c5e2176c192da3e6b470a906d9822303475b2fb28c95f0f2a0f18f3ca5->leave($__internal_828784c5e2176c192da3e6b470a906d9822303475b2fb28c95f0f2a0f18f3ca5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
