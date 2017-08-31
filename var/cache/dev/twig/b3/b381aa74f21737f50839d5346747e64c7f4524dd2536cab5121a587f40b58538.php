<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_346a57ff4db171d28f2ecbf587abe9506fb20eaaf63e212f299c65055ca367f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9db5fe6af16b3e81e2f5652f3213616b28791a6a0b2c3cd3db868915e0b766b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db5fe6af16b3e81e2f5652f3213616b28791a6a0b2c3cd3db868915e0b766b2->enter($__internal_9db5fe6af16b3e81e2f5652f3213616b28791a6a0b2c3cd3db868915e0b766b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3c54e8ee544af11ee9b7f4b4f9ee472ca3e73ffef0d7cd7a2f762d403236e41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c54e8ee544af11ee9b7f4b4f9ee472ca3e73ffef0d7cd7a2f762d403236e41c->enter($__internal_3c54e8ee544af11ee9b7f4b4f9ee472ca3e73ffef0d7cd7a2f762d403236e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9db5fe6af16b3e81e2f5652f3213616b28791a6a0b2c3cd3db868915e0b766b2->leave($__internal_9db5fe6af16b3e81e2f5652f3213616b28791a6a0b2c3cd3db868915e0b766b2_prof);

        
        $__internal_3c54e8ee544af11ee9b7f4b4f9ee472ca3e73ffef0d7cd7a2f762d403236e41c->leave($__internal_3c54e8ee544af11ee9b7f4b4f9ee472ca3e73ffef0d7cd7a2f762d403236e41c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76a8ae7d45173bce1cf969d1a20052a0c4b126bc7d48490600146f133ba0690e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a8ae7d45173bce1cf969d1a20052a0c4b126bc7d48490600146f133ba0690e->enter($__internal_76a8ae7d45173bce1cf969d1a20052a0c4b126bc7d48490600146f133ba0690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff52d40ebfa2f233769c07836ffc9295a1e0e7484242249b4c96f5eda754a769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff52d40ebfa2f233769c07836ffc9295a1e0e7484242249b4c96f5eda754a769->enter($__internal_ff52d40ebfa2f233769c07836ffc9295a1e0e7484242249b4c96f5eda754a769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ff52d40ebfa2f233769c07836ffc9295a1e0e7484242249b4c96f5eda754a769->leave($__internal_ff52d40ebfa2f233769c07836ffc9295a1e0e7484242249b4c96f5eda754a769_prof);

        
        $__internal_76a8ae7d45173bce1cf969d1a20052a0c4b126bc7d48490600146f133ba0690e->leave($__internal_76a8ae7d45173bce1cf969d1a20052a0c4b126bc7d48490600146f133ba0690e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
