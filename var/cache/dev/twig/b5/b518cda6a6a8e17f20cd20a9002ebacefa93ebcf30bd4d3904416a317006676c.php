<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4fa23a947e32c478f3f2e369e43e14326bf62c17ee666395be20aa3df1613844 extends Twig_Template
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
        $__internal_7faabb813422fceaae776ca64043288a55e67148a0faf409012dc80c127a332f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7faabb813422fceaae776ca64043288a55e67148a0faf409012dc80c127a332f->enter($__internal_7faabb813422fceaae776ca64043288a55e67148a0faf409012dc80c127a332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3023a3c69a12c4089bb8d14b7476521509adfd9678c41ff1360b0a6b40f416d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3023a3c69a12c4089bb8d14b7476521509adfd9678c41ff1360b0a6b40f416d7->enter($__internal_3023a3c69a12c4089bb8d14b7476521509adfd9678c41ff1360b0a6b40f416d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7faabb813422fceaae776ca64043288a55e67148a0faf409012dc80c127a332f->leave($__internal_7faabb813422fceaae776ca64043288a55e67148a0faf409012dc80c127a332f_prof);

        
        $__internal_3023a3c69a12c4089bb8d14b7476521509adfd9678c41ff1360b0a6b40f416d7->leave($__internal_3023a3c69a12c4089bb8d14b7476521509adfd9678c41ff1360b0a6b40f416d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
