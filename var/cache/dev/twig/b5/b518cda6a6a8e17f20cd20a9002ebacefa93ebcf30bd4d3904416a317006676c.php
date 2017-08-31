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
        $__internal_27380c18a55cb718b9e677754471013d5b42512ec78fe01ca7387a7266f0a5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27380c18a55cb718b9e677754471013d5b42512ec78fe01ca7387a7266f0a5f3->enter($__internal_27380c18a55cb718b9e677754471013d5b42512ec78fe01ca7387a7266f0a5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9aa09b2e51ef97255e435579506f8366823f40af32977528b6df703c5c35ff52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa09b2e51ef97255e435579506f8366823f40af32977528b6df703c5c35ff52->enter($__internal_9aa09b2e51ef97255e435579506f8366823f40af32977528b6df703c5c35ff52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_27380c18a55cb718b9e677754471013d5b42512ec78fe01ca7387a7266f0a5f3->leave($__internal_27380c18a55cb718b9e677754471013d5b42512ec78fe01ca7387a7266f0a5f3_prof);

        
        $__internal_9aa09b2e51ef97255e435579506f8366823f40af32977528b6df703c5c35ff52->leave($__internal_9aa09b2e51ef97255e435579506f8366823f40af32977528b6df703c5c35ff52_prof);

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
