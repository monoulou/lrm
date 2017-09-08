<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a37a29ee30be38c3c73c5bf5d9de342c3fdeabbf7a5ce47c18b6cba310f0c5bf extends Twig_Template
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
        $__internal_05a8d36bab5a198aa4bed59e81e96ca3c2bc6397cc6ae347a3851a10c7619b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a8d36bab5a198aa4bed59e81e96ca3c2bc6397cc6ae347a3851a10c7619b8f->enter($__internal_05a8d36bab5a198aa4bed59e81e96ca3c2bc6397cc6ae347a3851a10c7619b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0be46a0efb57b592f8a61137da704a980b3b35d11ba66c0bf9770d94317d8a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be46a0efb57b592f8a61137da704a980b3b35d11ba66c0bf9770d94317d8a30->enter($__internal_0be46a0efb57b592f8a61137da704a980b3b35d11ba66c0bf9770d94317d8a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05a8d36bab5a198aa4bed59e81e96ca3c2bc6397cc6ae347a3851a10c7619b8f->leave($__internal_05a8d36bab5a198aa4bed59e81e96ca3c2bc6397cc6ae347a3851a10c7619b8f_prof);

        
        $__internal_0be46a0efb57b592f8a61137da704a980b3b35d11ba66c0bf9770d94317d8a30->leave($__internal_0be46a0efb57b592f8a61137da704a980b3b35d11ba66c0bf9770d94317d8a30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
