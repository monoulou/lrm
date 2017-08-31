<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cec62264490f91cea2833ea4071a090f9549d720937d6b756e91d2f53ec6aa70 extends Twig_Template
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
        $__internal_2b0b9008f03d02ccc9d9f076cf1aed828ca78e491ec2831e2feede4b749e544d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0b9008f03d02ccc9d9f076cf1aed828ca78e491ec2831e2feede4b749e544d->enter($__internal_2b0b9008f03d02ccc9d9f076cf1aed828ca78e491ec2831e2feede4b749e544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_83d0b657df127374f7aac626ffd10fd2b84f9d6ea2d984f3c0016b0c53a8e02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d0b657df127374f7aac626ffd10fd2b84f9d6ea2d984f3c0016b0c53a8e02b->enter($__internal_83d0b657df127374f7aac626ffd10fd2b84f9d6ea2d984f3c0016b0c53a8e02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2b0b9008f03d02ccc9d9f076cf1aed828ca78e491ec2831e2feede4b749e544d->leave($__internal_2b0b9008f03d02ccc9d9f076cf1aed828ca78e491ec2831e2feede4b749e544d_prof);

        
        $__internal_83d0b657df127374f7aac626ffd10fd2b84f9d6ea2d984f3c0016b0c53a8e02b->leave($__internal_83d0b657df127374f7aac626ffd10fd2b84f9d6ea2d984f3c0016b0c53a8e02b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
